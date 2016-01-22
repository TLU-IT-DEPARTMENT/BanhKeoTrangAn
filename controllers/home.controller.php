<?php

class HomeController extends Controller {

    public function __construct($data = array()) {
        parent::__construct($data);
       // $this->model = new Home();
       
    }

    public function index() {
        echo "test";
    }

    public function admin_index(){
        Router::redirect('home/admin_index');
    }
}
