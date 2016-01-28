<?php

class UserController extends Controller {

    public function __construct($data = array()) {
        parent::__construct($data);
        $this->model = new User();
    }

    public function admin_list() {
        $this->data['lstUsers'] = $this->model->selectAll();
    }

    public function admin_add() {
        $data = array();
        $r = 1;
        if ($_POST) {
            $Name = $_POST['Name'];
            $Name = validateName($Name);
            if (!$Name) {
                $r = 0;
            }
            $Password = md5(Config::get('salt') . $_POST['Password']);
            $Fullname = $_POST['Fullname'];
            $Gender = $_POST['Gender'];
            $Birthday = $_POST['Birthday'];
            $Address = $_POST['Address'];
            $Email = validateEmail($_POST['Email']);
            if (!$Email) {
                $r = 0;
            }
            $PhoneNumber = $_POST['PhoneNumber'];
            $Status = $_POST['Status'];

            $data = array(
                'Name' => $Name,
                'Password' => $Password,
                'Fullname' => $Fullname,
                'Gender' => $Gender,
                'Birthday' => $Birthday,
                'Address' => $Address,
                'Email' => $Email,
                'PhoneNumber' => $PhoneNumber,
                'Status' => $Status,
                'r' => $r
            );

            $isAdd = $this->model->add($data, $r);
            if ($isAdd) {
                Router::redirect(ADMIN_ROOT . "/user/list");
            }
        }
    }

    public function admin_login() {
        if ($_POST && isset($_POST['username']) && isset($_POST['password'])) {
            $data = array();
            $user = $this->model->getByLogin($_POST['username']);
            $hash = md5(Config::get('salt') . $_POST['password']);
            if ($user && $user['Status'] == 1 && $hash == $user['Password']) {
                Session::set('Name', $user['Name']);
                Session::set('role', $user['Status']);

                $data = array(
                    'name' => $user['Name'],
                    'status' => 'success',
                );
                // role = 1 : admin
                // role = 0 : member --> cannot access
                Router::redirect(ADMIN_ROOT);
            }
            echo json_encode($data);
        }
    }

    public function admin_logout() {
        Session::destroy();
        Router::redirect(ADMIN_ROOT);
    }

}
