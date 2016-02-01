<?php

class TagPost extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function selectAll() {
        $query = "select * from tag_post ";
        return $this->db->query($query);
    }

    public function selectTagPost() {
        $query = "select * from tag inner join post ";
        $data = $this->db->query($query);
        return $data;
    }

    public function countAllRecord() {
        $query = "select count(*) as count from tag_post";
        $result = $this->db->query($query);
        return $result[0]['count'];
    }

    public function paginate($page, $size) {
        $start = ($page - 1) * $size;
        $sql = "select * from tag_post limit {$start},{$size} ";
        return $this->db->query($sql);
    }

    public function insert($IDTag,$IDPost, $r) {
        if ($r != 0) {
            $query = "insert into tag_post(IDTag,IDPost) values ('{$IDTag}','{$IDPost}' )";
            return $this->db->query($query);
        } else {
            throw new Exception("failed to insert tag_post");
        }
    }

}
