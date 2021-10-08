<?php

declare(strict_types=1);

require_once('../../Config/config.php');
require_once(ROOT . "/Model/Entity/Category.php");
require_once(ROOT . "/Model/Database/MySQLDatabaseConnection.php");
require_once(ROOT . '/Model/Repository/CategoryRepository.php');

$categoryRepository = new CategoryRepository();
$categories = $categoryRepository->findLasts(3);

// require_once(ROOT . '/View/Category/homeCategoryView.php');
echo $twig->render('Category/home.html.twig', [
    'categories'=>$categories
]);