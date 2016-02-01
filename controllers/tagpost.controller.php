<?php

class TagPostController extends Controller {

    public function __construct($data = array()) {
        parent::__construct($data);
        $this->model = new TagPost();
    }

    public function admin_list() {
        $currentPage = $this->params[1];
        if (!$currentPage) {
            $currentPage = 1;
        }
        $maxSize = 5;
        $maxShowPaging = 10;
        $countRecord = intval($this->model->countAllRecord());
        $totalPage = ceil($countRecord / $maxSize);
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

        $TagModel = new Tag();
        $PostModel = new Post();
        $r = 1;
        $tag = $TagModel->selectAll();
        $post = $PostModel->selectAll();

        $countTag = intval($TagModel->countAllRecord());
        $countPost = intval($PostModel->countAllPost());
        $IDTag = array();
        $IDPost = array();
        for (; $i <= $countTag; $i++) {
            $IDTag[] = $tag[$i]['IDTag'];
        }
        for (; $i <= $countPost; $i++) {
            $IDPost[] = $post[$i]['IDPost'];
        }

        if (empty($IDTag) || empty($IDPost)) {
            $r = 0;
        }
        if ($r != 0) {
            $tag_post = $this->model->selectTagPost();
        }
        $Title = $tag_post['Title'];
        $Content = $tag_post['Content'];
        $Slug = $tag_post['Slug'];
        $Image = $tag_post['Image'];
        $Tag = $tag_post['IDTag'];
        $PostTime = $tag_post['PostTime'];
       
        $insert = $this->model->insert($IDTag,$IDPost, $r);
        if (!$insert) {
            //error page
        }

        $this->data['totalPage'] = $totalPage;
        $this->data['paging'] = $paging;
        $this->data['data'] = $this->model->paginate($currentPage, $maxSize);
        $this->data['currentPage'] = $currentPage;
    }

}
