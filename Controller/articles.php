<?php

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once('../Model/EntityManager.php');
require_once('../Factory/ArticleFactory.php');

$articleFactory = new ArticleFactory();
$articlesView = $articleFactory->createArticles(15);

require_once('../View/articlesView.php');