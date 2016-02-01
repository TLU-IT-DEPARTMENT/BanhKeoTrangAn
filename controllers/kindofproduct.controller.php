<?php

class KindOfProductController extends Controller {

    public function __construct($data = array()) {
        parent::__construct($data);
        $this->model = new KindOfProduct();
    }

    public function admin_list() {
        $currentPage = $this->params[1];
        if(!$currentPage){
            $currentPage = 1;
        }
        $maxSize = 10;
        $maxShowPaging = 10;
        $countCategories = intval($this->model->countAllKindOfProduct());
        $totalPage = ceil($countCategories / $maxSize);
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
        $this->data['listKindOfProduct'] = $this->model->paginate($currentPage,$maxSize);
        $this->data['currentPage'] = $currentPage;
    }

    public function admin_add() {
        $this->data['listKindOfProduct'] = $this->model->selectAll();
        if (isset($_POST['submit'])) {
            $r = 1;
            $Name = $_POST['Name'];
            $IDKindOfProductParent = $_POST['IDKindOfProductParent'] == null ? NULL : $_POST['IDKindOfProductParent'];
            $Slug = $_POST['Slug'];
            $OrderKindOfProduct = $_POST['OrderKindOfProduct'];
            $Desription = $_POST['Description'];
            $Status = $_POST['Status'] == 'enable' ? 1 : 0 ;
            $data = array(
                'Name' => $Name,
                'IDKindOfProductParent' => $IDKindOfProductParent,
                'Slug' => $Slug,
                'OrderKindOfProduct' => $OrderKindOfProduct,
                'Description' => $Desription,
                'Status' => $Status
            );

            $isAdd = $this->model->insert($data, $r);
            if ($isAdd) {
                Router::redirect(ADMIN_ROOT . "/kindofproduct/list/page/1");
            }
        }
    }

    public function admin_edit() {
        $this->data['listKindOfProduct'] = $this->model->selectAll();
        $this->data['kindofproduct'] = $this->model->selectByIDKindOfProduct($this->params[0]);
        if (isset($_POST['submit'])) {
            $r = 1;
            $IDKindOfProduct = $this->params[0];
            $Name = $_POST['Name'];
            $IDKindOfProductParent = $_POST['IDKindOfProductParent'] == null ? NULL : $_POST['IDKindOfProductParent'];
            $Slug = $_POST['Slug'];
            $OrderKindOfProduct = $_POST['OrderKindOfProduct'];
            $Desription = $_POST['Description'];
            $Status = $_POST['Status'] == 'enable' ? 1 : 0 ;
            $data = array(
                'IDKindOfProduct' => $IDKindOfProduct,
                'IDKindOfProductParent' => $IDKindOfProductParent,
                'Name' => $Name,
                'Slug' => $Slug,
                'OrderKindOfProduct' => $OrderKindOfProduct,
                'Description' => $Desription,
                'Status' => $Status
            );

            $isAdd = $this->model->update($data, $r);
            if ($isAdd) {
                Router::redirect(ADMIN_ROOT . "/kindofproduct/list/page/1");
            }
        }
    }

    public function admin_delete() {
        $r = 1;
        $id = $this->params[0];
        $isDelete = $this->model->delete($id, $r);
        if ($isDelete) {
            Router::redirect(ADMIN_ROOT . "/kindofproduct/list/page/1");
        } else {
            Session::setFlash("unable to delete kindofproduct");
        }
    }

}
