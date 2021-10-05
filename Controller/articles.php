<?php

declare(strict_types=1);

require_once('../Config/config.php');

require_once(ROOT . '/Model/EntityManager.php');
require_once(ROOT . '/Factory/ArticleFactory.php');

$articleFactory = new ArticleFactory();
$articlesView = $articleFactory->createArticles(15);

require_once('../View/articlesView.php');