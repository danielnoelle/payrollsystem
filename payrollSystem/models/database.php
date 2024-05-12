<?php

class Database
{

    private $host = 'localhost';
    private $dbname = 'payroll_system';
    private $port = 3307;
    private $username = 'root';
    private $password = 'Ejboy2504';

    public function getConnection()
    {

        try {

            $host = $this->host;
            $dbname = $this->dbname;
            $port = $this->port;
            $username = $this->username;
            $password = $this->password;

            $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    /**
     * Get the value of host
     */ 
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Get the value of dbname
     */ 
    public function getDbname()
    {
        return $this->dbname;
    }

    /**
     * Get the value of port
     */ 
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }
}
