<?php

class PostController extends Controller {

    public function __construct($data = array()) {
        parent::__construct($data);
        $this->model = new Post();
    }

    public function admin_list() {
        $currentPage = $this->params[1];
        if (!$currentPage) {
            $currentPage = 1;
        }
        $maxSize = 5;
        $maxShowPaging = 10;
        $countPost = intval($this->model->countAllPost());
        $totalPage = ceil($countPost / $maxSize);
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
        $this->data['lstPosts'] = $this->model->paginate($currentPage, $maxSize);
        $this->data['currentPage'] = $currentPage;
    }

   
    public function admin_add() {
        $data = array();
        $r = 1;
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == "POST") {
            $Title = $_POST['Title'];
            $Content = $_POST['Content'];
            $Slug = $_POST['Slug'];
            $Image = '';
            if (!empty($_FILES["uploadedimage"]["name"])) {
                $file_name = $_FILES["uploadedimage"]["name"];
                $temp_name = $_FILES["uploadedimage"]["tmp_name"];
                $imgtype = $_FILES["uploadedimage"]["type"];
                $target_path =  "./img/upload/";
                $file_path = "./img/upload/" . $file_name;
                move_uploaded_file($temp_name, $file_path);
                $Image = $file_name;
            }

            $data = array(
                'Title' => $Title,
                'Content' => $Content,
                'Slug' => $Slug,
                'Image' => $Image,
            );

            $isAdded = $this->model->insert($data, $r);
            if ($isAdded) {
                Router::redirect(ADMIN_ROOT . "/post/list/page/1");
            }
        }
    }

}