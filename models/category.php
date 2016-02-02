<?php

class Category extends Model {

    var $IDCategory;
    var $IDCaegoryParent;
    var $Name;
    var $Slug;
    var $OrderCategory;
    var $Description;

    public function __construct() {
        parent::__construct();
    }

    public function selectAll() {
        $query = "select * from category";
        return $this->db->query($query);
    }

    public function selectAncestorByIDCategory($IDCategory) {
        $dataAncestor = array();
        while (true) {
            $data = $this->selectByIDCategory($IDCategory);
            $temp = array(
                'IDCategory' => $data[0]['IDCategory'],
                'Name' => $data[0]['Name']
            );
            array_push($dataAncestor, $temp);
            if ($data[0]['IDCategoryParent'] == null) {
                break;
            } else {
                $IDCategory = $data[0]['IDCategoryParent'];
            }
        }
        return $dataAncestor;
    }

    public function selectByIDCategory($IDCategory) {
        if ($IDCategory == null) {
            return null;
        } else {
            $query = "select * from category where IDCategory = {$IDCategory}";
            return $this->db->query($query);
        }
    }

    public function selectByIDCategoryParent($IDCategoryParent) {
        $query = "select * from category where IDCategoryParent = {$IDCategoryParent}";
        return $this->db->query($query);
    }
    
    public function selectByStatus($Status){
        $query = "select * from category where Status = {$Status}";
        return $this->db->query($query);
    }

    public function insert($data, $r) {
        if ($r != 0) {
            $query = "insert into category(IDCategoryParent, Name, Slug, OrderCategory, Description, Status) values ({$data['IDCategoryParent']},"
                    . "'{$data['Name']}', '{$data['Slug']}', '{$data['OrderCategory']}', '{$data['Description']}', {$data['Status']})";
            return $this->db->query($query);
        } else {
            throw new Exception("failed to add category");
        }
    }

    public function update($data, $r) {
        if ($r != 0) {
            $query = "update category set IDCategoryParent = {$data['IDCategoryParent']}, Name = '{$data['Name']}', Slug = '{$data['Slug']}',"
                    . "OrderCategory = {$data['OrderCategory']}, Description = '{$data['Description']}', Status = {$data['Status']} where IDCategory = {$data['IDCategory']}";
            return $this->db->query($query);
        } else {
            throw new Exception("failed to update category");
        }
    }

    public function delete($data, $r) {
        if ($r != 0) {
            $query = "delete from category where IDCategory = {$data}";
            return $this->db->query($query);
        } else {
            throw new Exception("failed to delete category");
        }
    }

    public function countAllCategory() {
        $sql = "select count(*) as count from category";
        $result = $this->db->query($sql);
        return $result[0]['count'];
    }

    public function paginate($page, $size) {
        $start = ($page - 1) * $size;
        $sql = "select * from category limit {$start},{$size} ";
        return $this->db->query($sql);
    }

    public function processAncestorByIDCategory($IDCategory) {
        $str = "";
        $data = $this->selectAncestorByIDCategory($IDCategory);
        for ($i = count($data) - 1; $i >= 0; $i--) {
            if ($i != 0) {
                $str = $str . $data[$i]['Name'] . " > ";
            } else {
                $str = $str . $data[$i]['Name'];
            }
        }
        return $str;
    }
    
    public function selectAllFormalName(){
        $data = $this->selectAll();
        $dataName = array();
        foreach ($data as $temp){
            $dataTemp = array(
                'IDCategory' => $temp['IDCategory'],
                'Name' => $this->processAncestorByIDCategory($temp['IDCategory'])
            );
            array_push($dataName, $dataTemp);
        }
        return $dataName;
    }
    
    public function selectFormalNameByStatus($Status){
        $data = $this->selectByStatus($Status);
        $dataName = array();
        foreach ($data as $temp){
            $dataTemp = array(
                'IDCategory' => $temp['IDCategory'],
                'Name' => $this->processAncestorByIDCategory($temp['IDCategory'])
            );
            array_push($dataName, $dataTemp);
        }
        return $dataName;
    }

    public function getIDCategory() {
        return $this->IDCategory;
    }

    public function getIDCaegoryParent() {
        return $this->IDCaegoryParent;
    }

    public function getName() {
        return $this->Name;
    }

    public function getSlug() {
        return $this->Slug;
    }

    public function getOrderCategory() {
        return $this->OrderCategory;
    }

    public function getDescription() {
        return $this->Description;
    }

    public function setIDCategory($IDCategory) {
        $this->IDCategory = $IDCategory;
    }

    public function setIDCaegoryParent($IDCaegoryParent) {
        $this->IDCaegoryParent = $IDCaegoryParent;
    }

    public function setName($Name) {
        $this->Name = $Name;
    }

    public function setSlug($Slug) {
        $this->Slug = $Slug;
    }

    public function setOrderCategory($OrderCategory) {
        $this->OrderCategory = $OrderCategory;
    }

    public function setDescription($Description) {
        $this->Description = $Description;
    }

}
