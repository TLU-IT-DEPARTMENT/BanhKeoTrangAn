<?php

class HomeController extends Controller {

    public function __construct($data = array()) {
        parent::__construct($data);
    }

    public function index() {
        $this->data['category'] = $this->category();
    }

    public function category() {
        $category = new Category();
        $data = $category->selectByStatus(1);
        $result = $this->createNested($data);
//        echo '<pre>';
//        print_r($result);
//        echo '</pre>';
//        die;
        return $result;
    }

    function createNested($categories, $parentId = null) {
        $results = [];
        foreach ($categories as $category) {
            if ($parentId == $category['IDCategoryParent']) {
                $nextParentId = $category['IDCategory'];
                $category['children'] = $this->createNested($categories, $nextParentId);

                $results[] = $category;
            }
        }

        return $results;
    }

    public function admin_index() {
        
    }

}
