<?php

require_once("Article.php");
require_once("Database/MySQLDatabaseConnection.php");

class EntityManager
{

    private ?PDO $dbConnection;
    
    public function __construct()
    {
        $MySQLDatabaseConnection = new MySQLDatabaseConnection();
        $this->dbConnection = $MySQLDatabaseConnection->connect();

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
            ":title" => $article->getTitle(),
            ":content" => $article->getContent(),
            ":status" => $article->getStatus(),
            ":created_at" => $article->getCreatedAt()->format('Y-m-d H:i:s')
        ));

    }





    
    // public function recupArticles() : object
    // {
    //     $sql = "SELECT * FROM article";

    //     $result = $this->dbConnexion->query($sql);
    //     return $result;
    //     $listArticles = [];
    //     foreach  ($result as $row) {        
    //         $article = new Article();
    //         $article->setId($row['id']);
    //         $article->setTitle($row['title']);
    //         $article->setContent($row['content']);
    //         $article->setStatus($row['status']);
    //         //$article->setCreatedAt($row['created-at']);
    //         array_push($listArticles, $article);
    //     }
        
    //     return $listArticles;
    // }

}

