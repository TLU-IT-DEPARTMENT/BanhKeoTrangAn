<?php

class SliderController extends Controller {

    public function __construct($data = array()) {
        parent::__construct($data);
        $this->model = new Slider();
    }

    public function slider() {
        $this->data['slider'] = 'slider'; 
    }

    public function admin_list() {
        $currentPage = $this->params[1];
        if (!$currentPage) {
            $currentPage = 1;
        }
        $maxSize = 10;
        $maxShowPaging = 10;
        $countSliders = intval($this->model->countAllSlider());
        $totalPage = ceil($countSliders / $maxSize);
        $paging = array();
        $i = 1;
        if ($currentPage >= $maxShowPaging) {
            do {
                $i = $i + $maxShowPaging - 1;
            } while ($i + $maxShowPaging - 1 <= $currentPage);
        }
        for (; $i <= $totalPage; $i++) {
            if (count($paging) >= $maxShowPaging) {
                break;
            }
            $paging[] = $i;
        }
        $this->data['totalPage'] = $totalPage;
        $this->data['paging'] = $paging;
        $this->data['listSlider'] = $this->model->paginate($currentPage, $maxSize);
        $this->data['currentPage'] = $currentPage;
    }

    public function admin_add() {
        $this->data['listSlider'] = $this->model->selectAll();
        if (isset($_POST['submit'])) {
            $r = 1;
            $Name = $_POST['Name'];
            $Slug = $_POST['Slug'];
            $OrderCategory = $_POST['OrderCategory'];
            $Desription = $_POST['Description'];
            $Status = $_POST['Status'] == 'enable' ? 1 : 0;
            $data = array(
                'Name' => $Name,
                'IDCategoryParent' => $IDCategoryParent,
                'Slug' => $Slug,
                'OrderCategory' => $OrderCategory,
                'Description' => $Desription,
                'Status' => $Status
            );

            $isAdd = $this->model->insert($data, $r);
            if ($isAdd) {
                Router::redirect(ADMIN_ROOT . "/category/list/page/1");
            }
        }
    }

    public function admin_edit() {
        $this->data['listCategory'] = $this->model->selectAll();
        $this->data['category'] = $this->model->selectByIDCategory($this->params[0]);
        if (isset($_POST['submit'])) {
            $r = 1;
            $IDCategory = $this->params[0];
            $Name = $_POST['Name'];
            $IDCategoryParent = $_POST['IDCategoryParent'] == null ? NULL : $_POST['IDCategoryParent'];
            $Slug = $_POST['Slug'];
            $OrderCategory = $_POST['OrderCategory'];
            $Desription = $_POST['Description'];
            $Status = $_POST['Status'] == 'enable' ? 1 : 0;
            $data = array(
                'IDCategory' => $IDCategory,
                'IDCategoryParent' => $IDCategoryParent,
                'Name' => $Name,
                'Slug' => $Slug,
                'OrderCategory' => $OrderCategory,
                'Description' => $Desription,
                'Status' => $Status
            );

            $isAdd = $this->model->update($data, $r);
            if ($isAdd) {
                Router::redirect(ADMIN_ROOT . "/category/list/page/1");
            }
        }
    }

    public function admin_delete() {
        $r = 1;
        $id = $this->params[0];
        $isDelete = $this->model->delete($id, $r);
        if ($isDelete) {
            Router::redirect(ADMIN_ROOT . "/category/list/page/1");
        } else {
            Session::setFlash("unable to delete category");
        }
    }

}
