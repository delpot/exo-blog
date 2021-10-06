<?php

require_once(ROOT . "/Model/Database/MySQLDatabaseConnection.php");
require_once(ROOT . './Model/Factory/UserFactory.php');

class CategoryRepository
{

    private ?PDO $dbConnection;

    public function __construct() {
        $mysqlDbConnection = new MySQLDatabaseConnection();
        $this->dbConnection = $mysqlDbConnection->connect();
    }

    public function findByUsername(string $username): ?User
    {
        $sql = "SELECT * FROM user where username=:username";

        $stmt = $this->dbConnection->prepare($sql);
        $stmt->execute(['user'=>$user]);
        $userDb = $stmt->fetch();

        if ($userDb) {
            $userFactory = new UserFactory();
            $userEntity = $userFactory->createUserFromDb($userDb);
            return $userEntity;
        } else {
            return null;
        }

    }

}