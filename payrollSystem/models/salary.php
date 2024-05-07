<?php

class Salary {

    private $id;
    private $taxDeduction;
    private $bonus;
    private $benefits;
    private $totalSalary;
    private $hourlyRate;
    private $grossSalary;
    private $totalDeduction;
    private $netSalary;


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
     * Get the value of tax
     */

    /**
     * Get the value of bonus
     */ 
    public function getBonus()
    {
        return $this->bonus;
    }

    /**
     * Set the value of bonus
     *
     * @return  self
     */ 
    public function setBonus($bonus)
    {
        $this->bonus = $bonus;

        return $this;
    }

    /**
     * Get the value of benefits
     */ 
    public function getBenefits()
    {
        return $this->benefits;
    }

    /**
     * Set the value of benefits
     *
     * @return  self
     */ 
    public function setBenefits($benefits)
    {
        $this->benefits = $benefits;

        return $this;
    }

    /**
     * Get the value of totalSalary
     */ 
    public function getTotalSalary()
    {
        return $this->totalSalary;
    }

    /**
     * Set the value of totalSalary
     *
     * @return  self
     */ 
    public function setTotalSalary($totalSalary)
    {
        $this->totalSalary = $totalSalary;

        return $this;
    }

    /**
     * Get the value of taxDeduction
     */ 
    public function getTaxDeduction()
    {
        return $this->taxDeduction;
    }

    /**
     * Set the value of taxDeduction
     *
     * @return  self
     */ 
    public function setTaxDeduction($taxDeduction)
    {
        $this->taxDeduction = $taxDeduction;

        return $this;
    }

    /**
     * Get the value of hourlyRate
     */ 
    public function getHourlyRate()
    {
        return $this->hourlyRate;
    }

    /**
     * Set the value of hourlyRate
     *
     * @return  self
     */ 
    public function setHourlyRate($hourlyRate)
    {
        $this->hourlyRate = $hourlyRate;

        return $this;
    }

    /**
     * Get the value of grossSalary
     */ 
    public function getGrossSalary()
    {
        return $this->grossSalary;
    }

    /**
     * Set the value of grossSalary
     *
     * @return  self
     */ 
    public function setGrossSalary($grossSalary)
    {
        $this->grossSalary = $grossSalary;

        return $this;
    }

    /**
     * Get the value of totalDeduction
     */ 
    public function getTotalDeduction()
    {
        return $this->totalDeduction;
    }

    /**
     * Set the value of totalDeduction
     *
     * @return  self
     */ 
    public function setTotalDeduction($totalDeduction)
    {
        $this->totalDeduction = $totalDeduction;

        return $this;
    }

    /**
     * Get the value of netSalary
     */ 
    public function getNetSalary()
    {
        return $this->netSalary;
    }

    /**
     * Set the value of netSalary
     *
     * @return  self
     */ 
    public function setNetSalary($netSalary)
    {
        $this->netSalary = $netSalary;

        return $this;
    }
}