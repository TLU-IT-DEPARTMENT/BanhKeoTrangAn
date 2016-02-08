<?php

class HomeController extends Controller {

    public function __construct($data = array()) {
        parent::__construct($data);
    }

    public function index() {
        $this->data['test'] = 'category';
    }

    public function admin_index() {
        
    }

}
