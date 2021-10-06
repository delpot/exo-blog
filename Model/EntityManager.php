<?php

require_once(ROOT . "/Model/Entity/Article.php");
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

}

