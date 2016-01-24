<?php

class UserController extends Controller {

    public function __construct($data = array()) {
        parent::__construct($data);
        $this->model = new User();
    }

    public function admin_login() {
        if ($_POST && isset($_POST['username']) && isset($_POST['password'])) {
            $data = array();
            $user = $this->model->getByLogin($_POST['username']);

//            echo '<pre>';
//            print_r($user);
//            echo '</pre>';
            $hash = md5(Config::get('salt') . $_POST['password']);
            if ($user && $user['Status'] == 1 && $hash == $user['Password']) {
                Session::set('Name', $user['Name']);
                Session::set('role', $user['Status']);

                $data = array(
                    'name' => $user['Name'],
                    'status' => 'success',
                );

                $this->data['json'] = $data;
                $this->data['user'] = $user;

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
