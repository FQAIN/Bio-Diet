<?php

class Product {

    private $productid, $name, $description, $qty, $price;

    public function __construct($name, $description, $qty, $price) {
        $this->name = $name;
        $this->description = $description;
        $this->qty = $qty;
        $this->price = $price;
    }

    public function getproductid() {
        return $this->productid;
    }

    public function setproductid($value) {
        $this->productid = $value;
    }

    public function getname() {
        return $this->name;
    }

    public function setname($value) {
        $this->name = $value;
    }

    public function getdescription() {
        return $this->description;
    }

    public function setdescription($value) {
        $this->description = $value;
    }

    public function getqty() {
        return $this->qty;
    }

    public function setqty($value) {
        $this->qty = $value;
    }

    public function getprice() {
        return $this->price;
    }

    public function setprice($value) {
        $this->price = $value;
    }
    //put your code here
}
