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

    public function selectByIDCategory($IDCategory) {
        $query = "select * from category where IDCategory = {$IDCategory}";
        return $this->db->query($query);
    }

    public function selectByIDCategoryParent($IDCategoryParent) {
        $query = "select * from category where IDCategoryParent = {$IDCategoryParent}";
        return $this->db->query($query);
    }

    public function insert($data, $r) {
        if ($r != 0) {
            $query = "insert into category(IDCategoryParent, Name, Slug, OrderCategory, Description) values ({$data['IDCategoryParent']},"
                    . "'{$data['Name']}', '{$data['Slug']}', '{$data['OrderCategory']}', '{$data['Description']}')";
            return $this->db->query($query);
        } else {
            throw new Exception("failed to add category");
        }
    }

    public function update($data, $r) {
        
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
