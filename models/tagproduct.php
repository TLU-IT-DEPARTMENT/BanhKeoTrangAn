<?php

class TagProduct extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function selectAll() {
        $query = "select * from tag_product ";
        return $this->db->query($query);
    }

    public function selectByIDTag($IDTag) {
        $query = "select * from tag_product where IDTag = {$IDTag}";
        return $this->db->query($query);
    }

    public function selectByIDProduct($IDProduct) {
        $query = "select * from tag_product where IDProduct = {$IDProduct}";
        return $this->db->query($query);
    }

    public function countAllRecord() {
        $query = "select count(*) as count from tag_product";
        $result = $this->db->query($query);
        return $result[0]['count'];
    }

    public function paginate($page, $size) {
        $start = ($page - 1) * $size;
        $sql = "select * from tag_product limit {$start},{$size} ";
        return $this->db->query($sql);
    }

    public function insert($data, $r) {
        if ($r != 0) {
            $query = "insert into tag_product(IDTag,IDProduct) values ({$data['IDTag']},{$data['IDProduct']} )";
            return $this->db->query($query);
        } else {
            throw new Exception("failed to insert tag_product");
        }
    }
    public function update($data, $r) {
        if ($r != 0) {
            $query = "update tag_product set IDTag = {$data['IDTag']} where IDProduct = {$data['IDProduct']} ";
          
            return $this->db->query($query);
        } else {
            throw new Exception("failed to update tag_product");
        }
    }

}
