<?php

namespace Besmer\Model;

class Person {
    
    protected $id = "";
    protected $name = "";
    protected $company = "";
    protected $email = "";
    protected $phone ="";
    protected $address = "";
    protected $city = "";
    protected $region ="";
    protected $country ="";
    protected $zip= "";
    
    public function __construct() {
        
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getCompany() {
        return $this->company;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getCity() {
        return $this->city;
    }

    public function getRegion() {
        return $this->region;
    }

    public function getCountry() {
        return $this->country;
    }

    public function getZip() {
        return $this->zip;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setCompany($company) {
        $this->company = $company;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function setRegion($region) {
        $this->region = $region;
    }

    public function setCountry($country) {
        $this->country = $country;
    }

    public function setZip($zip) {
        $this->zip = $zip;
    }


}