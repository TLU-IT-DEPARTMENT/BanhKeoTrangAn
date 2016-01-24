<?php

class Home extends Model {

    public function getList() {
        $sql = "select * from user ";
        return $this->db->query($sql);
    }

}
