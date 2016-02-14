<?php

class ReceiptDetail extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function selectAll() {
        $query = "select * from receiptdetail ";
        return $this->db->query($query);
    }

    public function selectByIDReceipt($ID) {
        $query = "select * from receiptdetail where IDReceipt = {$ID}";
        return $this->db->query($query);
    }

    public function countAllRecord() {
        $query = "select count(*) as count from receiptdetail";
        $result = $this->db->query($query);
        return $result[0]['count'];
    }

    public function countAllRecordEnable() {
        $query = "select count(*) as count from receiptdetail where Status = 1";
        $result = $this->db->query($query);
        return $result[0]['count'];
    }

    public function paginate($page, $size) {
        $start = ($page - 1) * $size;
        $sql = "select * from receiptdetail limit {$start},{$size} ";
        return $this->db->query($sql);
    }

}
