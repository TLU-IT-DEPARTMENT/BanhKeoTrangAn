<?php

class HomeController extends Controller {

    public function __construct($data = array()) {
        parent::__construct($data);
        $this->model = new Home();
    }

    public function index() {
        // slider
        $this->data['sliderShow'] = $this->sliderShow();
        // category
        $this->data['categoryLeftbar'] = $this->categoryLeftbar();
        $this->data['kindofproductLeftbar'] = $this->kindofproductLeftbar();
        // list product
        $this->data['product'] = $this->showProduct();
        //recommend
        $productDetail = new ProductDetail();
        $this->data['recommend'] = $productDetail->selectProductDetailRecommend();

        // kind of product
        $this->data['kindofproduct'] = $this->model->showKindOfProduct();
        // cart
        $cartController = new CartController();
        $price = $cartController->getPriceCart();
//        echo "<pre>";
//        print_r($_SESSION['cart']);
//        echo "</pre>";
//        die;
        if (isset($price))
            $_SESSION['price'] = $price;
    }
    
    function sliderShow(){
        $slider = new Slider();
        return $slider->selectByStatus(1);
    }

    public function categoryLeftbar() {
        $category = new Category();
        $data = $category->selectByStatus(1);
        $result = $this->createCategoryNested($data);
        return $result;
    }

    /* tree view */

    function createCategoryNested($categories, $parentId = null) {
        $results = [];
        foreach ($categories as $category) {
            if ($parentId == $category['IDCategoryParent']) {
                $nextParentId = $category['IDCategory'];
                $category['children'] = $this->createCategoryNested($categories, $nextParentId);
                $results[] = $category;
            }
        }
        return $results;
    }

    public function kindofproductLeftbar() {
        $kindofproduct = new KindOfProduct();
        $data = $kindofproduct->selectByStatus(1);
        $result = $this->createKindOfProductNested($data);
        return $result;
    }

    function createKindOfProductNested($kindofproduct, $parentID = null) {
        $results = [];
        foreach ($kindofproduct as $item) {
            if ($parentID == $item['IDKindOfProductParent']) {
                $nextParentID = $item['IDKindOfProduct'];
                $item['children'] = $this->createKindOfProductNested($kindofproduct, $nextParentID);
                $results[] = $item;
            }
        }
        return $results;
    }

    public function showProduct() {
        $product = new Product();
        return $product->selectJoin();
    }

//    public function SignIn() {
//        
//    }

    public function admin_index() {
        
    }

}
