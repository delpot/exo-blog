<?php

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once('../Model/EntityManager.php');
require_once('../Factory/ArticleFactory.php');
require_once('../View/ArticleView.php');

$articleFactory = new ArticleFactory();
$articlesView = $articlesFactory->createArticles(15);