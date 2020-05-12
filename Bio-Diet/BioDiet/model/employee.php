<?php

class Employee {

    private $employeeid, $firstname, $lastname, $email, $address, $phone, $birth, $password;

    public function __construct($firstname, $lastname, $email, $address, $phone, $birth, $password) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->address = $address;
        $this->phone = $phone;
        $this->birth = $birth;
        $this->password = $password;
    }

    public function getemployeeid() {
        return $this->employeeid;
    }

    public function setemployeeid($value) {
        $this->employeeid = $value;
    }

    public function getfirstname() {
        return $this->firstname;
    }

    public function setfirstname($value) {
        $this->firstname = $value;
    }

    public function getlastname() {
        return $this->lastname;
    }

    public function setlastname($value) {
        $this->lastname = $value;
    }

    public function getemail() {
        return $this->email;
    }

    public function setemail($value) {
        $this->email = $value;
    }

    public function getaddress() {
        return $this->address;
    }

    public function setaddress($value) {
        $this->address = $value;
    }

    public function getphone() {
        return $this->phone;
    }

    public function setphone($value) {
        $this->phone = $value;
    }

    public function getbirth() {
        return $this->birth;
    }

    public function setbirth($value) {
        $this->birth = $value;
    }

    public function getpassword() {
        return $this->password;
    }

    public function setpassword($value) {
        $this->password = $value;
    }

    //put your code here
}
