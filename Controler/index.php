<?php

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once('../Model/EntityManager.php');
require_once('../Factory/ArticleFactory.php');

$articleFactory = new ArticleFactory();
$articles = $articleFactory->createArticles(3);

require_once('../View/HomeView.php');









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
