<?php

declare(strict_types=1);

require_once('../../Config/config.php');

require_once(ROOT . '/Model/EntityManager.php');
require_once(ROOT . '/Model/Factory/CategoryFactory.php');
// require_once(ROOT . '/View/Category/create-categoryView.php');

$message = "";

if (!empty($_POST['title']) && !empty($_POST['color'])) {
    $categoryFactory = new CategoryFactory();
    $category = $categoryFactory->createCategory($_POST["title"], $_POST["color"]);

    $entityManager = new EntityManager();
    $entityManager->persistCategory($category);

    $message = "Successfully created!";
}

echo $twig->render('Category/create-category.html.twig', [
    "message" => $message,
]);