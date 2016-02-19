<?php

class Home extends Model {

    public function __construct() {
        parent::__construct();
    }

    /* hiển thị loại sản phẩm ở index */

    public function showKindOfProduct() {
        $query = "select * from kindofproduct where IDKindOfProductParent is null and Status = 1 order by IDKindOfProduct ASC limit 5";
        $this->db->query($query);
        return $this->db->query($query);
    }

    /* hiển thị sản phẩm theo loai ở index */

    public function showProductByKind($Kind = 1) {
        $query = "select * from product where IDProduct in"
                . "(select IDProduct from kindofproduct_product where IDKindOfProduct = {$Kind}) limit 4 ";
        return $this->db->query($query);
    }

}
