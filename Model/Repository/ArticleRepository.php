<?php

// require_once(ROOT . '/Model/Article.php');
// require_once(ROOT . '/Model/Database/MySQLDatabaseConnection.php');

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
            $articleEntity->setId($article['id']);
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
            $articleEntity->setId($article['id']);
            $articleEntity->setTitle($article['title']);
            $articleEntity->setStatus($article['status']);
            $articleEntity->setContent($article['content']);
            $articleEntity->setCreatedAt(new \DateTime($article['created_at']));
            array_push($articles, $articleEntity);
        }

        return $articles;
    }

    public function find($id): ?Article
    {
        $sql = "SELECT * FROM article where id=:id";

        $stmt = $this->dbConnection->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $articleDb = $stmt->fetch();

        $articleEntity = new Article();
        $articleEntity->setId($articleDb['id']);
        $articleEntity->setTitle($articleDb['title']);
        $articleEntity->setStatus($articleDb['status']);
        $articleEntity->setContent($articleDb['content']);
        $articleEntity->setCreatedAt(new \DateTime($articleDb['created_at']));

        return $articleEntity;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM article where id=:id";

        $stmt = $this->dbConnection->prepare($sql);
        $stmt->execute(['id'=>$id]);
    }

}
