<?php

class PagesController extends Controller {

    public function index() {
        $this->data['test_content'] = "Here will test";
    }

    public function admin_index() {
        /*
         * Note : Request for login into dashboard. Don't delete it!
         */
    }

}
