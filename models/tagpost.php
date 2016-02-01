<?php

class TagPost extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function selectAll() {
        $query = "select * from tag_post ";
        return $this->db->query($query);
    }

    public function selectByIDTag($IDTag) {
        $query = "select * from tag_post where IDTag = {$IDTag}";
        return $this->db->query($query);
    }

    public function selectByIDPost($IDPost) {
        $query = "select * from tag_post where IDPost = {$IDPost}";
        return $this->db->query($query);
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

    public function insert($data, $r) {
        if ($r != 0) {
            $query = "insert into tag_post(IDTag,IDPost) values ({$data['IDTag']},{$data['IDPost']} )";
            return $this->db->query($query);
        } else {
            throw new Exception("failed to insert tag_post");
        }
    }

}
