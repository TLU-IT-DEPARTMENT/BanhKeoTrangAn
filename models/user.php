<?php

class User extends Model {

    public function getByLogin($Name) {
        $Name = $this->db->escape($Name);
        $sql = "select * from user where Name = '{$Name}'limit 1";
        $result = $this->db->query($sql);
        if (isset($result[0])) {
            return $result[0];
        }
        return false;
    }

}
