<?php

class Company
{

    private $id;
    private $name;
    private $industry;
    private $street;
    private $city;
    private $province;
    private $country;
    private $postalCode;
    private $phoneNumber;
    private $email;
    private $foundedDate;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of industry
     */ 
    public function getIndustry()
    {
        return $this->industry;
    }

    /**
     * Set the value of industry
     *
     * @return  self
     */ 
    public function setIndustry($industry)
    {
        $this->industry = $industry;

        return $this;
    }

    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->street;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get the value of city
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */ 
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of province
     */ 
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set the value of province
     *
     * @return  self
     */ 
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get the value of country
     */ 
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of country
     *
     * @return  self
     */ 
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get the value of postalCode
     */ 
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set the value of postalCode
     *
     * @return  self
     */ 
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get the value of phoneNumber
     */ 
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set the value of phoneNumber
     *
     * @return  self
     */ 
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of foundedDate
     */ 
    public function getFoundedDate()
    {
        return $this->foundedDate;
    }

    /**
     * Set the value of foundedDate
     *
     * @return  self
     */ 
    public function setFoundedDate($foundedDate)
    {
        $this->foundedDate = $foundedDate;

        return $this;
    }

    public function __construct($id, $name, $industry, $street, $city, $province, $country, $postalCode, $phoneNumber, $email, $foundedDate) {

        $this->id = $id;
        $this->name = $name;
        $this->industry = $industry;
        $this->street = $street;
        $this->city = $city;
        $this->province = $province;
        $this->country = $country;
        $this->postalCode = $postalCode;
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
        $this->foundedDate = $foundedDate;

    }

}
