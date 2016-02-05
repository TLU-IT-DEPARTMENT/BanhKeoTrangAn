<?php

class ProductDetail extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function insert($data, $r) {
        if ($r != 0) {
            $sql = "insert into productdetail (IDProduct,Image,Caption) values ('{$data['IDProduct']}','{$data['Image']}','{$data['Caption']}') ";
            return $this->db->query($sql);
        } else {
            throw new Exception("Failed to insert productdetail");
        }
    }

    public function update($data, $r) {
        if ($r != 0) {
            $sql = "update productdetail set IDProduct = '{$data['IDProduct']}' , Image = '{$data['Image']}', Caption = '{$data['Caption']}' "
                    . "where IDProductDetail = {$data['IDProductDetail']} ";

            return $this->db->query($sql);
        } else {
            throw new Exception("failed to edit productdetail");
        }
    }

    public function delete($id) {
        $sql = "delete from productdetail where IDProductDetail = {$id} ";
        return $this->db->query($sql);
    }

    public function countAllRecord() {
        $query = "select count(*) as count from productdetail";
        $result = $this->db->query($query);
        return $result[0]['count'];
    }

    public function countRecordWithID($IDProduct) {
        $query = "select count(*) as count from productdetail where IDProduct = {$IDProduct}";
        $result = $this->db->query($query);
        return $result[0]['count'];
    }

    public function paginate($page, $size) {
        $start = ($page - 1) * $size;
        $query = "select * form productdetail limit {$start},{$size}";
        return $this->db->query($query);
    }

    public function paginateJoin($id, $page, $size) {
        $start = ($page - 1) * $size;
        $query = "(select * from (select distinct product.*,productdetail.IDProductDetail,productdetail.Image , "
                . "productdetail.Caption from productdetail join product on productdetail.IDProduct = product.IDProduct )AS R "
                . "where IDProduct = {$id} limit {$start},{$size})";
        return $this->db->query($query);
    }

    public function selectAll() {
        $query = "select * from productdetail ";
        return $this->db->query($query);
    }

    public function selectByID($id) {
        $query = "select * from productdetail where IDProductDetail = {$id} ";
        $id = $this->db->query($query);
        return $id;
    }

    public function selectByIDProduct($id) {
        $query = "select * from productdetail where IDProduct = {$id} ";
        $id = $this->db->query($query);
        return $id;
    }

}
