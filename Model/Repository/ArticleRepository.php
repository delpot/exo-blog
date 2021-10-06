<?php

require_once(ROOT . './Factory/ArticleFactory.php');

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

        $articleFactory = new ArticleFactory();
        $articleEntity = $articleFactory->createArticlesFromDb($articlesDb);
        
        return $articleEntity;
    }

    public function findLasts($nbArticles): array
    {
        $sql = "SELECT * FROM article ORDER BY ID DESC LIMIT $nbArticles";

        $stmt = $this->dbConnection->prepare($sql);
        $stmt->execute();
        $articlesDb = $stmt->fetchAll();

        $articleFactory = new ArticleFactory();
        $articleEntity = $articleFactory->createArticlesFromDb($articlesDb);

        return $articleEntity;
    }

    public function find($id): ?Article
    {
        $sql = "SELECT * FROM article where id=:id";

        $stmt = $this->dbConnection->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $articleDb = $stmt->fetch();

        $articleFactory = new ArticleFactory();
        $articleEntity = $articleFactory->createArticleFromDb($articleDb);

        return $articleEntity;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM article where id=:id";

        $stmt = $this->dbConnection->prepare($sql);
        $stmt->execute(['id'=>$id]);
    }

}
