<?php

class User extends Model {

    var $UserID;
    var $UserName;
    var $Password;
    var $Fullname;
    var $Gender;
    var $Birthday;
    var $Address;
    var $Email;
    var $PhoneNumber;
    var $Status;
    
    public function __construct() {
        parent::__construct();
    }

    public function getByLogin($Name) {
        $Name = $this->db->escape($Name);
        $sql = "select * from user where Name = '{$Name}'limit 1";
        $result = $this->db->query($sql);
        if (isset($result[0])) {
            return $result[0];
        }
        return false;
    }
    public function selectAll(){
        $sql = "select * from user";
        return $this->db->query($sql);
    }
    public function add($data,$r){
        if($r != 0){
             $sql = "insert into user(Name,Password,Fullname,Gender,Birthday,Address,Email,PhoneNumber,Status) values("
               . "'{$data['Name']}','{$data['Password']}','{$data['Fullname']}','{$data['Gender']}','{$data['Birthday']}','{$data['Address']}',"
               . "'{$data['Email']}','{$data['PhoneNumber']}','{$data['Status']}')";
      
        return $this->db->query($sql);    
        }
        else{
            throw new Exception("failed to add user");
        } 
    }
    
    public function getUserID() {
        return $this->UserID;
    }

    public function getUserName() {
        return $this->UserName;
    }

    public function getPassword() {
        return $this->Password;
    }

    public function getFullname() {
        return $this->Fullname;
    }

    public function getGender() {
        return $this->Gender;
    }

    public function getBirthday() {
        return $this->Birthday;
    }

    public function getAddress() {
        return $this->Address;
    }

    public function getEmail() {
        return $this->Email;
    }

    public function getPhoneNumber() {
        return $this->PhoneNumber;
    }

    public function getStatus() {
        return $this->Status;
    }

    public function setUserID($UserID) {
        $this->UserID = $UserID;
    }

    public function setUserName($UserName) {
        $this->UserName = $UserName;
    }

    public function setPassword($Password) {
        $this->Password = $Password;
    }

    public function setFullname($Fullname) {
        $this->Fullname = $Fullname;
    }

    public function setGender($Gender) {
        $this->Gender = $Gender;
    }

    public function setBirthday($Birthday) {
        $this->Birthday = $Birthday;
    }

    public function setAddress($Address) {
        $this->Address = $Address;
    }

    public function setEmail($Email) {
        $this->Email = $Email;
    }

    public function setPhoneNumber($PhoneNumber) {
        $this->PhoneNumber = $PhoneNumber;
    }

    public function setStatus($Status) {
        $this->Status = $Status;
    }


}
