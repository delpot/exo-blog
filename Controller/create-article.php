<?php

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', 'on');

define('ROOT', dirname(dirname(__FILE__).'/'));

require_once(ROOT . '/Model/EntityManager.php');
require_once(ROOT . '/Factory/ArticleFactory.php');
require_once(ROOT . '/View/create-articleView.php');

if (!empty($_POST['title']) && !empty($_POST['content'])) {
    $articleFactory = new ArticleFactory();
    $article = $articleFactory->createArticle($_POST["title"], $_POST["content"]);

    $entityManager = new EntityManager();
    $entityManager->persistArticle($article);
}