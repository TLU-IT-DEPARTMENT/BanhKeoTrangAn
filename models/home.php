<?php

class Home extends Model {

    public function __construct() {
        parent::__construct();
    }

    /* hiển thị loại sản phẩm  */

    public function showKindOfProduct() {
        $query = "select * from kindofproduct order by IDKindOfProduct ASC limit 5";
        return $this->db->query($query);
    }

    /* hiển thị sản phẩm theo loai */

    public function showProductByKind($Kind) {
        $query = "select ";
    }

}
