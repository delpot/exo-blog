<?php

declare(strict_types=1);

require_once('../../Config/config.php');

require_once(ROOT . '/Model/Repository/CategoryRepository.php');

$categoryRepository = new CategoryRepository();
if (isset($_GET['id'])) {
    $category = $categoryRepository->find($_GET['id']);
}

// require_once(ROOT . '/View/Category/categoryView.php');
echo $twig->render('Category/category.html.twig', [
    'category'=>$category
]);