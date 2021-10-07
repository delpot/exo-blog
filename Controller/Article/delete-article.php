<?php
declare(strict_types=1);

require_once('../../Config/config.php');

require_once(ROOT . '/Model/Repository/ArticleRepository.php');
require_once(ROOT . "/Model/EntityManager.php");

$articleRepository = new ArticleRepository();
$entityManager = new EntityManager();

if (isset($_GET['id'])) {
    $article = $articleRepository->find($_GET['id']);
    $entityManager->delete($article);
}

require_once(ROOT . '/View/Article/delete-articleView.php');