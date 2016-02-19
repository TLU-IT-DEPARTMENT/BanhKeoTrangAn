<?php

class Slider extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function selectAll() {
        $query = "select * from slider";
        return $this->db->query($query);
    }

    public function selectByIDSlider($IDSlider) {
        if ($IDSlider == null) {
            return null;
        } else {
            $query = "select * from slider where IDSlider = {$IDSlider}";
            return $this->db->query($query);
        }
    }

    public function selectByStatus($Status) {
        $query = "select * from slider where Status = {$Status}";
        return $this->db->query($query);
    }

    public function insert($data, $r) {
        if ($r != 0) {
            $sql = "insert into slider(Title,Header,Content,Image,Link,Order,Status) values ('{$data['Title']}','{$data['Header']}','{$data['Content']}',"
                    . "'{$data['Image']}','{$data['Link']}','{$data['Order']}','{$data['Status']}')";
            $this->db->query($sql);
            $query = "select LAST_INSERT_ID() as LastSlider";
            return $this->db->query($query);
        } else {
            throw new Exception("Failed to insert slider");
        }
    }

    public function update($data, $r) {
        if ($r != 0) {
            $sql = "update slider set Title = '{$data['Title']}' , Header = '{$data['Header']}', Content = '{$data['Content']}',"
                    . "Image = '{$data['Image']}', Link = '{$data['Link']}',Order = '{$data['Order']}', Status = '{$data['Status']}' "
                    . "where IDSlider = '{$data['IDSlider']}' ";

            return $this->db->query($sql);
        } else {
            throw new Exception("failed to edit slider");
        }
    }

    public function delete($id) {
        $sql = "delete from slider where IDSlider = '{$id}' ";
        return $this->db->query($sql);
    }

    public function countAllSlider() {
        $query = "select count(*) as count from slider";
        $result = $this->db->query($query);
        return $result[0]['count'];
    }

    public function countAllSliderEnable() {
        $query = "select count(*) as count from slider where Status = 1";
        $result = $this->db->query($query);
        return $result[0]['count'];
    }

    public function paginate($page, $size) {
        $start = ($page - 1) * $size;
        $sql = "select * from slider limit {$start},{$size} ";
        return $this->db->query($sql);
    }

}
