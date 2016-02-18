<?php

class HomeController extends Controller {

    public function __construct($data = array()) {
        parent::__construct($data);
        $this->model = new Home();
    }

    public function index() {
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
//        echo '<pre>';
//       print_r($this->data['kindofproduct']);
//        echo '</pre>';
//       die;
        // cart
        if (isset($_SESSION['cart'])) {
            $this->data['cart'] = $_SESSION['cart'];
        }
        if (isset($_SESSION['price']))
            $this->data['price'] = $_SESSION['price'];
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

    public function addtocart() {

        $IDProduct = $this->params[0];
        $quantity = 1;
        $productModel = new Product();
        $product = $productModel->selectJoinByIDProduct($IDProduct);

//        $itemArray = array(
//            $product[0]["IDProduct"] => array(
//                'name' => $product[0]["Name"],
//                'code' => $product[0]["IDProduct"],
//                'quantity' => 1,
//                'price' => $product[0]["UnitPrice"],
//                'image' => $product[0]['Image']
//            )
//        );
//        echo '<pre>';
//        print_r($itemArray);
//        echo '</pre>';
//        die;
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            $count = count($_SESSION['cart']);
            $flag = FALSE;
            for ($i = 0; $i < $count; $i++) {
                if ($_SESSION['cart'][$i]['id'] == $IDProduct) {
                    $_SESSION['cart'][$i]['quantity'] += 1;
                    $_SESSION['cart'][$i]['price'] += $product[0]['UnitPrice'];
                    $flag = TRUE; // neu gio hang da co san pham
                    break;
                }
            }
            // gio hang chua cos san pham
            if ($flag == FALSE) {
                $_SESSION['cart'][$count]['id'] = $IDProduct;
                $_SESSION['cart'][$count]['quantity'] = 1;
                $_SESSION['cart'][$count]['price'] = $product[0]['UnitPrice'];
            }
        } else {
            $_SESSION['cart'] = array();
            $_SESSION['cart'][0]['id'] = $IDProduct;
            $_SESSION['cart'][0]['quantity'] = 1;
            $_SESSION['cart'][0]['price'] = $product[0]['UnitPrice'];
            $_SESSION['price'] = 0;
        }

        foreach ($_SESSION['cart'] as $key => $value) {
            $_SESSION['price'] += $value['price'];
        }

        $this->data['cart'] = $_SESSION['cart'];
//        echo '<pre>';
//        print_r($this->data['cart']);
//        echo '</pre>';
//        die;

        Router::redirect(ROOT_PATH);
    }

}
