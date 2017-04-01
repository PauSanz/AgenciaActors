<?php

require_once("controller/function_AutoLoad.php");

class user {

    private $id;
    private $name;
    private $password;

    public function __construct($id, $name, $password) {
        $this->setId($id);
        $this->setName($name);
        $this->setPassword($password);
    }

    public function getId() {
        return $this->id;
    }

    public function setId($value) {
        $this->id = $value;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($value) {
        $this->name = $value;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($value) {
        $this->password = $value;
    }

    public function addUser() {
        $userDb = new userdb();
        $userDb->adduser($this);
    }

    public function checkUser() {
        $userDb = new userdb();
        $result = $userDb->checkUser($this);
        return $result;
    }

}

?>