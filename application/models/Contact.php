<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Digvijay
 * Date: 30/4/13
 * Time: 4:59 PM
 * To change this template use File | Settings | File Templates.
 */

class Contact extends CI_Model {
    private $id;
    private $contactName;
    private $phoneNumber;
    private $phoneNumber1;
    private $phoneNumber2;
    private $email;
    private $fax;
    private $street;
    private $state;
    private $city;
    private $zip;
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;
        $this->setId($contactName);
    }

    public function getContactName()
    {
        return $this->contactName;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    public function getFax()
    {
        return $this->fax;
    }

    private function setId($id)
    {
        $contactId = "c". time();
        $this->id = $contactId;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber1($phoneNumber1)
    {
        $this->phoneNumber1 = $phoneNumber1;
    }

    public function getPhoneNumber1()
    {
        return $this->phoneNumber1;
    }

    public function setPhoneNumber2($phoneNumber2)
    {
        $this->phoneNumber2 = $phoneNumber2;
    }

    public function getPhoneNumber2()
    {
        return $this->phoneNumber2;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setStreet($street)
    {
        $this->street = $street;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    public function getZip()
    {
        return $this->zip;
    }
}