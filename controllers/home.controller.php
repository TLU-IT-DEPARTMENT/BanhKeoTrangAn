<?php

class HomeController extends Controller {

    public function __construct($data = array()) {
        parent::__construct($data);
    }

    public function index() {
        // category
        $this->data['category'] = $this->category();
        // list product
        $this->data['product'] = $this->showProduct();
//        echo '<pre>';
//        print_r($this->data['product']);
//        echo '</pre>';
//        die;
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

    public function showProduct() {
        $product = new Product();
        return $product->selectJoin();
    }

    public function admin_index() {
        
    }

}
