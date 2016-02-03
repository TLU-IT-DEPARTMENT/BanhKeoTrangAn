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
                    . "where IDProductDetail = '{$data['IDProduct']}' ";

            return $this->db->query($sql);
        } else {
            throw new Exception("failed to edit productdetail");
        }
    }

    public function delete($id) {
        $sql = "delete from productdetail where IDProductDetail = '{$id}' ";
        return $this->db->query($sql);
    }

    public function countAllRecord() {
        $query = "select count(*) as count from productdetail";
        $result = $this->db->query($query);
        return $result[0]['count'];
    }

    public function paginate($id,$page, $size) {
        $start = ($page - 1) * $size;
        $sql = "select * from product inner join productdetail on product.IDProduct = {$id} limit {$start},{$size} ";
        
        return $this->db->query($sql);
    }

    public function selectAll() {
        $query = "select * from productdetail ";
        return $this->db->query($query);
    }

    public function selectByID($id) {
        $query = "select * from productdetail where IDProductDetail = '{$id}' ";
        $id = $this->db->query($query);
        return $id[0];
    }
    public function selectByIDProduct($id) {
        $query = "select * from productdetail where IDProduct = '{$id}' ";
        $id = $this->db->query($query);
        return $id;
    }
}
