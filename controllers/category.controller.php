<?php

class CategoryController extends Controller {

    public function __construct($data = array()) {
        parent::__construct($data);
        $this->model = new Category();
    }

    public function admin_list() {
        $this->data['listCategory'] = $this->model->selectAll();
    }

}
