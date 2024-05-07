<?php

class User
{

    private $email;
    private $password;
    private $firstName;
    private $lastName;
    private $gender;
    private $birthdate;
    private $contactNumber;
    private $role;
    private $position;
    private $hoursWorked;




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
     * Get the value of firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get the value of birthDate
     */
    public function getBirthDate()
    {
        return $this->birthdate;
    }

    /**
     * Set the value of birthDate
     *
     * @return  self
     */
    public function setBirthDate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get the value of contactNumber
     */
    public function getContactNumber()
    {
        return $this->contactNumber;
    }

    /**
     * Set the value of contactNumber
     *
     * @return  self
     */
    public function setContactNumber($contactNumber)
    {
        $this->contactNumber = $contactNumber;

        return $this;
    }

    /**
     * Get the value of role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get the value of position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set the value of position
     *
     * @return  self
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    public function __construct($email, $password, $firstName, $lastName, $gender, $birthdate, $contactNumber, $role, $position, $hoursWorked)
    {

        $this->email = $email;
        $this->password = $password;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
        $this->birthdate = $birthdate;
        $this->contactNumber = $contactNumber;
        $this->role = $role;
        $this->position = $position;
        $this->hoursWorked = $hoursWorked;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of hoursWorked
     */ 
    public function getHoursWorked()
    {
        return $this->hoursWorked;
    }

    /**
     * Set the value of hoursWorked
     *
     * @return  self
     */ 
    public function setHoursWorked($hoursWorked)
    {
        $this->hoursWorked = $hoursWorked;

        return $this;
    }
}
