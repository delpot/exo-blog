<?php

require_once("Article.php");
require_once("Database/MysqlDatabaseConnexion.php");


class EntityManager
{

    private $dbConnexion;

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

    public function persistArticle(Article $article)
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

        $req->execute(array(
            "title" => $article->getTitle(),
            "content" => $article->getContent(),
            "status" => $article->getStatus(),
            "created_at" => $article->getCreatedAt()->format('Y-m-d H:i:s')
        ));

    }

}

