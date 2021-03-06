<?php

declare(strict_types=1);

require_once('../../Config/config.php');

require_once(ROOT . '/Model/EntityManager.php');
require_once(ROOT . '/Model/Factory/ArticleFactory.php');
// require_once(ROOT . '/View/Article/create-articleView.php');

$message ="";

if (!empty($_POST['title']) && !empty($_POST['content'])) {
    
    $articleFactory = new ArticleFactory();
    $article = $articleFactory->createArticle($_POST["title"], $_POST["content"]);

    $entityManager = new EntityManager();
    $entityManager->persistArticle($article);

    $message = "Successfully created!";
}

echo $twig->render('Article/create-article.html.twig', [
    "message" => $message,
]);