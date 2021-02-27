<?php
class Person
{
    private $userId;
    private $fname;
    private $lname;
    private $email;
    private $dob;
    private $gender;
    private $address;
    private $phone;
    private $password;
    private $tyof;
    private $image;

    function setId($userId)
    {
        $this->userId = $userId;
    }
    function getId()
    {
        return $this->userId;
    }

    function setFname($fname)
    {
        $this->fname = $fname;
    }
    function getFname()
    {
        return $this->fname;
    }

    function setLname($lname)
    {
        $this->lname = $lname;
    }
    function getLname()
    {
        return $this->lname;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }
    function getEmail()
    {
        return $this->email;
    }
    function setPassword($password)
    {
        $this->password = $password;
    }
    function getPassword()
    {
        return $this->password;
    }
    function setDob($dob)
    {
        $this->dob = $dob;
    }
    function getDob()
    {
        return $this->dob;
    }
    function setGender($gender)
    {
        $this->gender = $gender;
    }
    function getGender()
    {
        return $this->gender;
    }

    function setAddress($address)
    {
        $this->address = $address;
    }
    function getAddress()
    {
        return $this->address;
    }
    function setPhone($phone)
    {
        $this->phone = $phone;
    }
    function getPhone()
    {
        return $this->phone;
    }
    function setImage($image)
    {
        $this->image = $image;
    }
    function getImage()
    {
        return $this->image;
    }
    function setTyof($tyof)
    {
        $this->tyof = $tyof;
    }
    function gettyof()
    {
        return $this->tyof;
    }
}