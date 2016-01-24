<?php

class HomeController extends Controller {

    public function __construct($data = array()) {
        parent::__construct($data);
        $this->_model = new Home();
    }

    public function index() {
        $this->data['content'] = $this->_model->getList();
    }
}
