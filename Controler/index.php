<?php

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once('../Model/EntityManager.php');
require_once('../Factory/ArticleFactory.php');


$articleFactory = new ArticleFactory();

$articles = $articleFactory->createArticles(6);

foreach ($articles as $article) {
    echo "<h2>" . $article->getTitle() . "</h2>";
    echo "<p>" . $article->getContent() . "</p>";
}