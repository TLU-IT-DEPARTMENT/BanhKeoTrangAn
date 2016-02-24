<?php

class PaymentController extends Controller {

    public function __construct($data = array()) {
        parent::__construct($data);
    }

    //payment step 2
    public function payment() {
        // display information of customer
        $userModel = new User();
        $id = Session::get("UserID");
        $customer = $userModel->selectByID($id);
        $this->data['customer'] = $customer;
    }

    public function creditcard() {
        // payment step 3
        // config default credit card
        $CARD_NUMBER = "123";
        $CV_CODE = "123";
        $COUPON_CODE = "123";
        $CARD_EXPIRY = "05/07";
        ////
        $Config = array(
            'cardNumber' => $CARD_NUMBER,
            'cardCVC' => $CV_CODE,
            'cardExpiry' => $CARD_EXPIRY,
            'couponCode' => $COUPON_CODE
        );
        if ($_GET) {
            $first_name = $_GET['firstname'];
            $last_name = $_GET['lastname'];
            $email = $_GET['email'];
            $phonenumber = $_GET['phonenumber'];
        }

        $data = array();
        if ($_POST) {

            $card_number = $_POST['cardNumber'];
            $cv_code = $_POST['cardCVC'];
            $cardExpiry = $_POST['cardExpiry'];
            $couponCode = $_POST['couponCode'];

//            var_dump($card_number);
//            var_dump($cv_code);
//            var_dump($cardExpiry);
//            var_dump($couponCode);
//            die;
            // validate infor
            ////
            if (in_array($card_number, $Config) && in_array($cv_code, $Config) && in_array($cardExpiry, $Config) && in_array($couponCode, $Config)) {
                // save receipt
                $r = 1;
                $id_user = "";
                $total = "";
                if (isset($_SESSION['UserID']) && isset($_SESSION['price'])) {
                    $id_user = $_SESSION['UserID'];
                    $total = $_SESSION['price'];
                    $r = 1; //success
                } else {
                    $r = 0; // error
                }
                $dataReceipt = array(
                    'IDUser' => $id_user,
                    'Total' => $total,
                    'r' => $r
                );
                $receiptModel = new Receipt();
                $isInserted = $receiptModel->insert($dataReceipt, $r);
                if ($isInserted) {
                    $lastIdreceipt = $receiptModel->getLastID();
                    // save receipt detail
                    $receiptDetailModel = new ReceiptDetail();
                    $cartModel = new Cart();
                    foreach ($_SESSION['CartID'] as $key => $value) {
                        $dataReceiptDetail = array(
                            'IDReceipt' => $lastIdreceipt,
                            'IDCart' => $value,
                            'SaleUnitPrice' => $_SESSION['cart'][$key]['price'],
                            'Quantity' => $_SESSION['cart'][$key]['quantity'],
                        );
                        $isInsertedRD = $receiptDetailModel->insert($dataReceiptDetail, $r);
                        if ($isInsertedRD) {
                            // send mail confirm
                            $to = $email;
                            $name = $first_name . " " . $last_name;
                            $subject = "Banh Keo Trang An Notie";
                            $message = "<p>Congratulation you did puschased successfully! Thank you for using our services.</p>";

                            sendMail($to, $name, $subject, $message);
                            
                            // update status cart = 1 <==> paid
                            $dataCart = array(
                                'IDCart' => $value,
                                'Status' => 1,
                            );
                            $cartModel->paid($dataCart, $r);
                        } else {
                            $r = 2; // khong them duoc hoa don chi tiet
                        }
                    }
                    // message

                    unset($_SESSION['CartID']);
                    unset($_SESSION['cart']);
                    unset($_SESSION['price']);
                } else {
                    $r = 3; // khong them duoc hoa don
                }
            } else {
                $r = 4; // invail credit card
            }
        }
    }

//    public function buy() {
//        //Tài khoản nhận tiền
//        $receiver = "loint20@gmail.com";
//        //Khai báo url trả về 
//        $return_url = ROOT_PATH . "/en/payment/getPaid";
//        //Giá của cả giỏ hàng 
//        $price = $_SESSION['price'];
//        //Mã giỏ hàng 
//        $order_code = "Hãy lập trình mã giỏ hàng của bạn vào đây";
//        //Thông tin giao dịch
//        $transaction_info = "Hãy lập trình thông tin giao dịch của bạn vào đây";
//        //Khai báo đối tượng của lớp NL_Checkout
//        $nl = new NL_Checkout();
//        //Tạo link thanh toán đến nganluong.vn
//        $url = $nl->buildCheckoutUrl($return_url, $receiver, $transaction_info, $order_code, $price);
//        Router::redirect($url);
//    }
//
//    public function getPaid() {
//        //Lấy thông tin giao dịch
//        $transaction_info = $_GET["transaction_info"];
//        //Lấy mã đơn hàng 
//        $order_code = $_GET["order_code"];
//        //Lấy tổng số tiền thanh toán tại ngân lượng 
//        $price = $_GET["price"];
//        //Lấy mã giao dịch thanh toán tại ngân lượng
//        $payment_id = $_GET["payment_id"];
//        //Lấy loại giao dịch tại ngân lượng (1=thanh toán ngay ,2=thanh toán tạm giữ)
//        $payment_type = $_GET["payment_type"];
//        //Lấy thông tin chi tiết về lỗi trong quá trình giao dịch
//        $error_text = $_GET["error_text"];
//        //Lấy mã kiểm tra tính hợp lệ của đầu vào 
//        $secure_code = $_GET["secure_code"];
//
//        //Xử lí đầu vào 
//
//        $nl = new NL_Checkout();
//        $check = $nl->verifyPaymentUrl($transaction_info, $order_code, $price, $payment_id, $payment_type, $error_text, $secure_code);
//        if ($check)
//            $html .="<div align=\"center\">Cám ơn quý khách, quá trình thanh toán đã được hoàn tất. Chúng tôi sẽ kiểm tra và chuyển hàng sớm!</div>";
//        else
//            $html.="Quá trình thanh toán không thành công bạn vui lòng thực hiện lại";
//
//        echo $html;
//    }
//
}
