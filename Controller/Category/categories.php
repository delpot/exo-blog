<?php

declare(strict_types=1);

require_once('../../Config/config.php');

require_once(ROOT . '/Model/Repository/CategoryRepository.php');

$categoryRepository = new CategoryRepository();
$categoriesView = $categoryRepository->findAll();

require_once(ROOT . '/View/Category/categoriesView.php');