<?php

declare(strict_types=1);

require_once('../../Config/config.php');

require_once(ROOT . "/Model/Entity/Article.php");
require_once(ROOT . '/Model/Repository/ArticleRepository.php');
require_once(ROOT . '/Service/ArticleLengthScoreCalculator.php');
require_once(ROOT . '/Service/PublicationDaysScoreCalculator.php');
require_once(ROOT . '/Service/ArticleScoreCalculator.php');

$articleRepository = new ArticleRepository();

if (isset($_GET['id'])) {

    $articleId = $articleRepository->find($_GET['id']);

    $scoresCalculatorsClasses = [];
    $scoresCalculatorsClasses[] = new ArticleLengthScoreCalculator();
    $scoresCalculatorsClasses[] = new PublicationDaysScoreCalculator();

    $articleScoreCalculator = new ArticleScoreCalculator();

    $articleScore = $articleScoreCalculator->calculateScore($articleId, $scoresCalculatorsClasses);
}

require_once(ROOT . '/View/Article/articleView.php');