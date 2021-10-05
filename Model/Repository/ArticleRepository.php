<?php

class ArticleRepository
{

    private ?PDO $dbConnection;

    public function __construct() {
        $mysqlDbConnection = new MySQLDatabaseConnection();
        $this->dbConnection = $mysqlDbConnection->connect();
    }

    // refacto en clean code
    public function findAll(): array
    {
        $sql = "SELECT * FROM article";

        $stmt = $this->dbConnection->prepare($sql);
        $stmt->execute();
        $articlesDb = $stmt->fetchAll();

        $articles = [];

        foreach ($articlesDb as $article) {
            $articleEntity = new Article();
            $articleEntity->setTitle($article['title']);
            $articleEntity->setStatus($article['status']);
            $articleEntity->setContent($article['content']);
            $articleEntity->setCreatedAt(new \DateTime($article['created_at']));
            array_push($articles, $articleEntity);
        }

        return $articles;
    }

    public function findLasts($nbArticles): array
    {
        $sql = "SELECT * FROM article ORDER BY ID DESC LIMIT $nbArticles";

        $stmt = $this->dbConnection->prepare($sql);
        $stmt->execute();
        $articlesDb = $stmt->fetchAll();

        $articles = [];

        foreach ($articlesDb as $article) {
            $articleEntity = new Article();
            $articleEntity->setTitle($article['title']);
            $articleEntity->setStatus($article['status']);
            $articleEntity->setContent($article['content']);
            $articleEntity->setCreatedAt(new \DateTime($article['created_at']));
            array_push($articles, $articleEntity);
        }

        return $articles;
    }

}
