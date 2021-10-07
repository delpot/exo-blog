<?php

require_once(ROOT . "/Model/Entity/Article.php");

class ArticleScoreCalculator
{
    public function calculateScore(Article $article, array $articleScoreCalculators): float
    {
        $articleScore = 0;

        foreach($articleScoresCalculators as $articleScoreCalculator) {
            $articleScore += $articleScoreCalculator->calculateScore($articleScore, $article);
        }

        return $articleScore / count($articleScoresCalculators);
    }

}
