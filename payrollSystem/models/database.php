<?php

class Database
{

    public function getConnection()
    {
        $host = 'localhost';
        $dbname = 'payroll_system';
        $port = 3307;
        $username = 'root';
        $password = 'Ejboy2504';

        try {

            $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
