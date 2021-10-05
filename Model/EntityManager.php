<?php

require_once("Article.php");


class EntityManager
{

    private ?PDO $dbConnexion;
    
    public function __construct()
    {
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $db = '3wa_blog';

        try {
            $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->dbConnexion = $conn;
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            return null;
        }
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

        $req = $this->dbConnexion->prepare($sql);

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

