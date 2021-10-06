<?php
declare(strict_types=1);

require_once('../../Config/config.php');

require_once(ROOT . "/Model/Entity/Article.php");
require_once(ROOT . "/Model/Database/MySQLDatabaseConnection.php");
require_once(ROOT . '/Model/Repository/ArticleRepository.php');

$articleRepository = new ArticleRepository();
if (isset($_GET['id'])) {
    $articleRepository->delete($_GET['id']);
}

require_once(ROOT . '/View/Article/delete-articleView.php');