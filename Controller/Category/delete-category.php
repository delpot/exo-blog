<?php
declare(strict_types=1);

require_once('../../Config/config.php');

require_once(ROOT . '/Model/Repository/CategoryRepository.php');
require_once(ROOT . "/Model/EntityManager.php");

$categoryRepository = new CategoryRepository();
$entityManager = new EntityManager();

if (isset($_GET['id'])) {
    $category = $categoryRepository->find($_GET['id']);
    $entityManager->delete($category);
}

require_once(ROOT . '/View/Category/delete-categoryView.php');