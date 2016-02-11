<?php

class Product extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function insert($data, $r) {
        if ($r != 0) {
            $sql = "insert into product(Name,Slug,Model,UnitPrice,Description,Rate,RatePeople,Status) values ('{$data['Name']}','{$data['Slug']}','{$data['Model']}',"
                    . "'{$data['UnitPrice']}','{$data['Description']}','{$data['Rate']}','{$data['RatePeople']}','{$data['Status']}')";
            $this->db->query($sql);
            $query = "select LAST_INSERT_ID() as LastPost";
            return $this->db->query($query);
        } else {
            throw new Exception("Failed to insert product");
        }
    }

    public function update($data, $r) {
        if ($r != 0) {
            $sql = "update product set Name = '{$data['Name']}' , Slug = '{$data['Slug']}', Model = '{$data['Model']}',"
                    . "UnitPrice = '{$data['UnitPrice']}', Description = '{$data['Description']}',Rate = '{$data['Rate']}',"
                    . "RatePeople = '{$data['RatePeople']}',Status = '{$data['Status']}' "
                    . "where IDProduct = '{$data['id']}' ";

            return $this->db->query($sql);
        } else {
            throw new Exception("failed to edit user");
        }
    }

    public function delete($id) {
        $sql = "delete from product where IDProduct = '{$id}' ";
        return $this->db->query($sql);
    }

    public function countAllRecord() {
        $query = "select count(*) as count from product";
        $result = $this->db->query($query);
        return $result[0]['count'];
    }

    public function countAllRecordEnable() {
        $query = "select count(*) as count from product where Status = 1";
        $result = $this->db->query($query);
        return $result[0]['count'];
    }

    public function paginate($page, $size) {
        $start = ($page - 1) * $size;
        $sql = "select * from product limit {$start},{$size} ";
        return $this->db->query($sql);
    }

    public function paginateJoin($page, $size) {
        $start = ($page - 1) * $size;
        $query = "select product.*, productdetail.Image,productdetail.Caption "
                . "from product inner join productdetail on product.IDProduct = productdetail.IDProduct and "
                . "product.Status = 1 limit {$start},{$size} ";
        return $this->db->query($query);
    }

    public function selectAll() {
        $query = "select * from product ";
        return $this->db->query($query);
    }

    public function selectByStatus($Status) {
        $query = "select * from product where Status = {$Status}";
        return $this->db->query($query);
    }

    public function selectByID($id) {
        $query = "select * from product where IDProduct = '{$id}' ";
        $id = $this->db->query($query);
        return $id;
    }

    public function selectByIDStatus($id, $Status) {
        $query = "select * from product where IDProduct = '{$id}' and Status = {$Status} ";
        $id = $this->db->query($query);
        return $id;
    }

    public function selectJoin() {
        $query = "select product.*, productdetail.Image,productdetail.Caption "
                . "from product inner join productdetail on product.IDProduct = productdetail.IDProduct and "
                . "product.Status = 1 limit 6 ";
        return $this->db->query($query);
    }

}
