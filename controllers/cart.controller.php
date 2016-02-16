<?php

class CartController extends Controller {

    public function __construct($data = array()) {
        parent::__construct($data);
        $this->model = new Cart();
    }

    public function admin_index() {
        $currentPage = $this->params[1];
        if (!$currentPage) {
            $currentPage = 1;
        }
        $maxSize = 10;
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
        $this->data['totalPage'] = $totalPage;
        $this->data['paging'] = $paging;
        $this->data['item'] = $this->model->paginate($currentPage, $maxSize);
        $this->data['currentPage'] = $currentPage;
    }

//    public function addtocart() {
//
//        $IDProduct = $this->params[0];
//        $quantity = 1;
//        $price = 0;
//        $productModel = new Product();
//        $product = $productModel->selectJoinByIDProduct($IDProduct);
//
//        $itemArray = array(
//            $product[0]["IDProduct"] => array(
//                'name' => $product[0]["Name"],
//                'code' => $product[0]["IDProduct"],
//                'quantity' => 1,
//                'price' => $product[0]["UnitPrice"],
//                'image' => $product[0]['Image']
//            )
//        );
//
////        echo '<pre>';
////        print_r($itemArray);
////        echo '</pre>';
////        die;
//        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
//            $count = count($_SESSION['cart']);
//            $flag = FALSE;
//            for ($i = 0; $i < $count; $i++) {
//                if ($_SESSION['cart'][$i]['id'] == $IDProduct) {
//                    $_SESSION['cart'][$i]['quantity'] += 1;
//                    $flag = TRUE; // neu gio hang da co san pham
//                    break;
//                }
//            }
//            // gio hang chua cos san pham
//            if ($flag == FALSE) {
//                $_SESSION['cart'][$count]['id'] = $IDProduct;
//                $_SESSION['cart'][$count]['quantity'] = 1;
//            }
//        } else {
//            $_SESSION['cart'] = array();
//            $_SESSION['cart'][0]['id'] = $IDProduct;
//            $_SESSION['cart'][0]['quantity'] = 1;
//        }
//
////        echo '<pre>';
////        print_r($quantity);
////        echo '</pre>';
////        die;
//
//        Router::redirect(ROOT_PATH);
//    }

}
