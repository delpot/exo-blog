<?php

require_once(ROOT . '/Model/Entity/Category.php');

class CategoryFactory
{
    public function createCategory(string $title, string $color): Category
    {
        $category = new Category();
        $category->setTitle($title);
        $category->setColor($color);

        return $category;
    }

    public function createCategoryFromDb(array $categoryFromDb): Category
    {
        $categoryEntity = new Category();
        $categoryEntity->setId($categoryFromDb['id']);
        $categoryEntity->setTitle($categoryFromDb['title']);
        $categoryEntity->setStatus($categoryFromDb['status']);
        $categoryEntity->setColor($categoryFromDb['color']);
        $categoryEntity->setCreatedAt(new \DateTime($categoryFromDb['created_at']));

        return $categoryEntity;
    }

    public function createCategoriesFromDb(array $categoryFromDbCategories): array
    {
        $categories = [];

        foreach ($categoryFromDbCategories as $categoryDb) {
            $categoryEntity = $this->createCategoryFromDb($categoryDb);
            array_push($categories, $categoryEntity);
        }

        return $categories;
    }
}
