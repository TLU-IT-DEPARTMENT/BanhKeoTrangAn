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

    public function showProductByKind($Kind = 1) {
        $query = "select product.*,productdetail.Image,productdetail.Caption from "
                . "(select * from kindofproduct_product where IDKindOfProduct = {$Kind}) AS T inner join product inner join productdetail"
                . " on T.IDProduct = product.IDProduct and T.IDProduct = productdetail.IDProduct limit 4 ";
        return $this->db->query($query);
    }

}
