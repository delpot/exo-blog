<?php

require_once(ROOT . "/Model/Database/MySQLDatabaseConnection.php");

class EntityManager
{

    private ?PDO $dbConnection;
    
    public function __construct()
    {
        $mySQLDatabaseConnection = new MySQLDatabaseConnection();
        $this->dbConnection = $mySQLDatabaseConnection->connect();

    }

    public function persistArticle(Article $article) : bool
    {
        $sql = "INSERT INTO article (title, content, status, created_at)
                VALUES (
                        :title, 
                        :content, 
                        :status,
                        :created_at
                )
        ";

        $req = $this->dbConnection->prepare($sql);

        return $req->execute(array(
            "title" => $article->getTitle(),
            "content" => $article->getContent(),
            "status" => $article->getStatus(),
            "created_at" => $article->getCreatedAt()->format('Y-m-d H:i:s')
        ));

    }

    public function persistCategory(Category $category) : bool
    {
        $sql = "INSERT INTO category (title, color, status, created_at)
                VALUES (
                        :title, 
                        :color, 
                        :status,
                        :created_at
                )
        ";

        $req = $this->dbConnection->prepare($sql);

        return $req->execute(array(
            "title" => $category->getTitle(),
            "color" => $category->getColor(),
            "status" => $category->getStatus(),
            "created_at" => $category->getCreatedAt()->format('Y-m-d H:i:s')
        ));

    }

    public function persistUser(User $user) : bool
    {
        $sql = "INSERT INTO user (username, password, email)
                VALUES (
                        :username, 
                        :password, 
                        :email
                )
        ";

        $req = $this->dbConnection->prepare($sql);

        return $req->execute(array(
            "username" => $user->getUsername(),
            "password" => $user->getPassword(),
            "email" => $user->getEmail()
        ));

    }

}

