<?php

class CategoryPost extends Model{
    public function __construct() {
        parent::__construct();
    }

    public function selectAll() {
        $query = "select * from category_post ";
        return $this->db->query($query);
    }

    public function selectByIDCategory($IDCategory) {
        $query = "select * from category_post where IDCategory = {$IDCategory}";
        return $this->db->query($query);
    }

    public function selectByIDPost($IDPost) {
        $query = "select * from category_post where IDPost = {$IDPost}";
        return $this->db->query($query);
    }

    public function countAllRecord() {
        $query = "select count(*) as count from category_post";
        $result = $this->db->query($query);
        return $result[0]['count'];
    }

    public function paginate($page, $size) {
        $start = ($page - 1) * $size;
        $sql = "select * from category_post limit {$start},{$size} ";
        return $this->db->query($sql);
    }

    public function insert($data, $r) {
        if ($r != 0) {
            $query = "insert into category_post(IDCategory,IDPost) values ({$data['IDCategory']},{$data['IDPost']} )";
            return $this->db->query($query);
        } else {
            throw new Exception("failed to insert category_post");
        }
    }

}