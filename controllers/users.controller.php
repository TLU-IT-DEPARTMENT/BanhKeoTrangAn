<?php

class UsersController extends Controller {

    public function __construct($data = array()) {
        parent::__construct($data);
        $this->model = new User();
    }

    public function index() {
        $this->data['users'] = $this->model->getList();
    }

}
