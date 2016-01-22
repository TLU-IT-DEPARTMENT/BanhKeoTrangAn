<?php

class Home extends Model {

    public function test() {
        $sql = "select * from user ";
        return $this->db->query($sql);
    }

}
