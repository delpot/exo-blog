<?php

declare(strict_types=1);

require_once('../../Config/config.php');

require_once(ROOT . "/Model/Entity/Article.php");
require_once(ROOT . "/Model/Database/MySQLDatabaseConnection.php");
require_once(ROOT . '/Model/Repository/ArticleRepository.php');

$articleRepository = new ArticleRepository();
$articles = $articleRepository->findLasts(3);

// require_once(ROOT . '/View/Article/homeArticleView.php');
echo $twig->render('Article/home.html.twig', [
    'articles'=>$articles
]);