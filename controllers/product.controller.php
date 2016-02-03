<?php

include_once '../models/tagproduct.php';
include_once '../models/productdetail.php';

class ProductController extends Controller {

    public function __construct($data = array()) {
        parent::__construct($data);
        $this->model = new Product();
    }

    public function admin_list() {
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

    public function admin_detail() {
        $ProductDetail = new ProductDetail();
        $idProduct = intval($this->params[3]);
        $Product = $this->model->selectByID($idProduct);
        $this->data['Product'] = $Product;

        $currentPage = $this->params[1];
        if (!$currentPage) {
            $currentPage = 1;
        }
        $maxSize = 10;
        $maxShowPaging = 10;
        $countRecord = intval($ProductDetail->countAllRecord());
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
        $this->data['item'] = $ProductDetail->paginate($idProduct, $currentPage, $maxSize);

        $this->data['currentPage'] = $currentPage;
    }

    public function admin_AddDetail() {
        $idProduct = intval($this->params[3]);
        $id = $this->params[3];
        $ProductDetailModel = new ProductDetail();
        $this->data['ProductName'] = $this->model->selectByID($id);
        

        $data = array();

        $valid_formats = array("jpg", "png", "gif", "zip", "bmp");
        $max_file_size = 1024 * 300; //300 kb
        $path = "./img/upload/"; // Upload directory
        $count = 0;
        $r = 1;
        if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
            $IDProduct = $idProduct;
            $Caption = $_POST['Caption'];
            // Loop $_FILES to exeicute all files
            foreach ($_FILES['files']['name'] as $f => $name) {
                if ($_FILES['files']['error'][$f] == 4) {
                    continue; // Skip file if any error found
                }
                if ($_FILES['files']['error'][$f] == 0) {
                    if ($_FILES['files']['size'][$f] > $max_file_size) {
                        Session::setFlash("$name is too large!.");
                        $r = 0;
                        continue; // Skip large files
                    } elseif (!in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats)) {
                        Session::setFlash("$name is not a valid format");
                        $r = 0;
                        continue; // Skip invalid file formats
                    } else { // No error found! Move uploaded files 
                        if (move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path . $name)) {
                            $data = array(
                                'IDProduct' => $IDProduct,
                                'Image' => $name,
                                'Caption' => $Caption,
                                'r' => $r,
                            );
                            $isInsert = $ProductDetailModel->insert($data, $r);
                            if (!$isInsert) {
                                Session::setFlash("$name can't insert");
                            }
                            $count++; // Number of successfully uploaded file
                            Router::redirect(ADMIN_ROOT . "/product/detail/page/1/product/" . $id);
                        }
                    }
                }
            }
        }
    }

    public function admin_EditDetail() {
        $idProduct = intval($this->params[0]);
        $id = $this->params[0];
        $ProductDetailModel = new ProductDetail();
        $this->data['ProductName'] = $this->model->selectByID($idProduct);
        $data = array();

        $valid_formats = array("jpg", "png", "gif", "zip", "bmp");
        $max_file_size = 1024 * 300; //300 kb
        $path = "./img/upload/"; // Upload directory
        $count = 0;
        $r = 1;
        if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
            $IDProduct = $idProduct;
            $Caption = $_POST['Caption'];
            // Loop $_FILES to exeicute all files
            foreach ($_FILES['files']['name'] as $f => $name) {
                if ($_FILES['files']['error'][$f] == 4) {
                    continue; // Skip file if any error found
                }
                if ($_FILES['files']['error'][$f] == 0) {
                    if ($_FILES['files']['size'][$f] > $max_file_size) {
                        Session::setFlash("$name is too large!.");
                        $r = 0;
                        continue; // Skip large files
                    } elseif (!in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats)) {
                        Session::setFlash("$name is not a valid format");
                        $r = 0;
                        continue; // Skip invalid file formats
                    } else { // No error found! Move uploaded files 
                        if (move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path . $name)) {
                            $data = array(
                                'IDProduct' => $IDProduct,
                                'Image' => $name,
                                'Caption' => $Caption,
                                'r' => $r,
                            );
                            $isInsert = $ProductDetailModel->update($data, $r);
                            if (!$isInsert) {
                                Session::setFlash("$name can't update");
                            }
                            $count++; // Number of successfully uploaded file
                            Router::redirect(ADMIN_ROOT . "/product/detail/page/1/product/" . $id);
                        }
                    }
                }
            }
        }
    }

    public function admin_DeleteDetail() {
        $idProduct = intval($this->params[0]);
        $id = $this->params[0];
        $ProductDetailModel = new ProductDetail();
        $isDelete = $ProductDetailModel->delete($idProduct);
        if ($isDelete) {
            Router::redirect(ADMIN_ROOT . "/product/detail/page/1/product/" . $id);
        } else {
            Session::setFlash("unable to delete detail product");
        }
    }

    public function admin_add() {
        $aTag = new Tag();
        $this->data['listTag'] = $aTag->selectByStatus(1);
        $data = array();
        $r = 1;
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == "POST") {
            $Name = $_POST['Name'];
            $Slug = $_POST['Slug'];
            $Model = $_POST['Model'];
            $UnitPrice = $_POST['UnitPrice'];
            $Description = $_POST['Description'];
            $Rate = $_POST['Rate'];
            $RatePeople = $_POST['RatePeople'];
            $Status = $_POST['Status'] == 'enable' ? 1 : 0;
            $data = array(
                'Name' => $Name,
                'Slug' => $Slug,
                'Model' => $Model,
                'UnitPrice' => $UnitPrice,
                'Description' => $Description,
                'Rate' => $Rate,
                'RatePeople' => $RatePeople,
                'Status' => $Status,
                'r' => $r,
            );
            $isAdded = $this->model->insert($data, $r);
            if (is_array($isAdded)) {

                $aTag = new TagProduct();
                foreach ($_POST['Tags'] as $Tag) {
                    $data = array(
                        'IDTag' => $Tag,
                        'IDProduct' => $isAdded[0]['LastPost']
                    );
                    $isAddedTagProduct = $aTag->insert($data, $r);
                }
                Router::redirect(ADMIN_ROOT . "/product/list/page/1");
            }
        }
    }

    public function admin_edit() {
        $id = $this->params[0];
        $item = $this->model->selectByID($id);
        $this->data['item'] = $item;

        $aTagProduct = new TagProduct();
        $aTag = new Tag();

        $IDByProduct = $aTagProduct->selectByIDProduct($id);

        if (!empty($IDByProduct)) {
            $IDTag = intval($IDByProduct[0]['IDTag']);
            $TagEN = $aTag->selectByIdStatus($IDTag, 1);
        } else {
            $TagEN = array(
                0 => array(
                    'IDTag' => '',
                    'Name' => '',
                )
            );
        }
        $this->data['listTagExist'] = $TagEN;
        $this->data['listTag'] = $aTag->selectAll();

        $data = array();
        $r = 1;
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == "POST") {
            $Name = $_POST['Name'];
            $Slug = $_POST['Slug'];
            $Model = $_POST['Model'];
            $UnitPrice = $_POST['UnitPrice'];
            $Description = $_POST['Description'];
            $Rate = $_POST['Rate'];
            $RatePeople = $_POST['RatePeople'];
            $Status = $_POST['Status'] == 'enable' ? 1 : 0;
            $data = array(
                'id' => $id,
                'Name' => $Name,
                'Slug' => $Slug,
                'Model' => $Model,
                'UnitPrice' => $UnitPrice,
                'Description' => $Description,
                'Rate' => $Rate,
                'RatePeople' => $RatePeople,
                'Status' => $Status,
                'r' => $r,
            );
            foreach ($_POST['Tags'] as $Tag) {
                $dataEdit = array(
                    'IDTag' => intval($Tag),
                    'IDProduct' => $id,
                    'r' => $r,
                );
                $isEditTag = $aTagProduct->update($dataEdit, $r);
            }

            if (!$isEditTag) {
                Session::setFlash("unable to update tag_product");
            }
            $isEdit = $this->model->update($data, $r);

            if ($isEdit) {
                Router::redirect(ADMIN_ROOT . "/product/list/page/1");
            }
        }
    }

    public function admin_delete() {
        $id = $this->params[0];
        $isDelete = $this->model->delete($id);
        if ($isDelete) {
            Router::redirect(ADMIN_ROOT . "/product/list/page/1");
        } else {
            Session::setFlash("unable to delete product");
        }
    }

}
