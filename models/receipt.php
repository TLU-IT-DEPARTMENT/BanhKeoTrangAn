<?php

class Receipt extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function selectAll() {
        $query = "select * from receipt ";
        return $this->db->query($query);
    }

    public function countAllRecord() {
        $query = "select count(*) as count from receipt";
        $result = $this->db->query($query);
        return $result[0]['count'];
    }

    public function countAllRecordEnable() {
        $query = "select count(*) as count from receipt where Status = 1";
        $result = $this->db->query($query);
        return $result[0]['count'];
    }

    public function paginate($page, $size) {
        $start = ($page - 1) * $size;
        $sql = "select * from receipt limit {$start},{$size} ";
        return $this->db->query($sql);
    }

}
