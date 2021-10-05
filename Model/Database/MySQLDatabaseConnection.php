<?php

require_once(ROOT . "/Model/Database/DatabaseConnectionInterface.php");

class MySQLDatabaseConnection implements DatabaseConnectionInterface
{
    public function connect(): ?PDO
    {
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $db = '3wa_blog';

        try {
            $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            return null;
        }
    }
}
