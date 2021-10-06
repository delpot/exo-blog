<?php

declare(strict_types=1);

require_once('../Config/config.php');

require_once(ROOT . "/Model/Article.php");
require_once(ROOT . "/Model/Database/MySQLDatabaseConnection.php");
require_once(ROOT . '/Model/Repository/ArticleRepository.php');

$articleRepository = new ArticleRepository();
$articles = $articleRepository->findLasts(3);

require_once(ROOT . '/View/HomeView.php');


























// $nombre = 10;
// $articles = $articleFactory->createArticles($nombre);
// for($num=0; $num<$nombre; $num++)
// {
//   echo '<h1> '. $articles[$num]->getTitle() . '</h1>';
//   echo '<p> '. $articles[$num]->getContent() . '</p>';
// }

//Persiste l'article
//$em = new EntityManager();
//$em->persistArticle($article);

// Récupérer Articles?
// $entityManager = new EntityManager();
// $listBdd = $articleFactory->getAllArticles();

// foreach  ($listBdd as $article) {
//     echo '<h1> '. $article->getTitle() . '</h1>';
//     echo '<p> '. $article->getContent() . '</p>';
// }
