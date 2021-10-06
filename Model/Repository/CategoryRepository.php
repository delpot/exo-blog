<?php

require_once(ROOT . './Model/Factory/CategoryFactory.php');

class CategoryRepository
{

    private ?PDO $dbConnection;

    public function __construct() {
        $mysqlDbConnection = new MySQLDatabaseConnection();
        $this->dbConnection = $mysqlDbConnection->connect();
    }

    // refacto en clean code
    public function findAll(): array
    {
        $sql = "SELECT * FROM category";

        $stmt = $this->dbConnection->prepare($sql);
        $stmt->execute();
        $categoriesDb = $stmt->fetchAll();

        $categoryFactory = new CategoryFactory();
        $categoryEntity = $categoryFactory->createCategoriesFromDb($categoriesDb);
        
        return $categoryEntity;
    }

    public function findLasts($nbCategories): array
    {
        $sql = "SELECT * FROM category ORDER BY ID DESC LIMIT $nbCategories";

        $stmt = $this->dbConnection->prepare($sql);
        $stmt->execute();
        $categoriesDb = $stmt->fetchAll();

        $categoryFactory = new CategoryFactory();
        $categoryEntity = $categoryFactory->createCategoriesFromDb($categoriesDb);

        return $categoryEntity;
    }

    public function find($id): ?Category
    {
        $sql = "SELECT * FROM category where id=:id";

        $stmt = $this->dbConnection->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $categoryDb = $stmt->fetch();

        $categoryFactory = new CategoryFactory();
        $categoryEntity = $categoryFactory->createCategoryFromDb($categoryDb);

        return $categoryEntity;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM category where id=:id";

        $stmt = $this->dbConnection->prepare($sql);
        $stmt->execute(['id'=>$id]);
    }

}
