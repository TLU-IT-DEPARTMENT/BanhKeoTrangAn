<?php

class HomeController extends Controller {

    public function __construct($data = array()) {
        parent::__construct($data);
        $this->model = new Home();
    }

    public function index() {
        // category
        $this->data['category'] = $this->category();
        // list product
        $this->data['product'] = $this->showProduct();
        //recommend
        $productDetail = new ProductDetail();
        $this->data['recommend'] = $productDetail->selectProductDetailRecommend();

        // kind of product
        $this->data['kindofproduct'] = $this->model->showKindOfProduct();
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
    /* tree view */
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
