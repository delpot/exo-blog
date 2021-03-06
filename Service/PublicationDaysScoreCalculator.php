<?php

require_once(ROOT . "/Model/Entity/Article.php");
require_once(ROOT . "/Service/ScoreCalculatorInterface.php");

class PublicationDaysScoreCalculator implements ScoreCalculatorInterface
{
    public function calculateScore(float $articleScore, Article $article): float
    {
        $articleDate = $article->getCreatedAt();
        $dateNow = new \DateTime('NOW');

        $daysSincePublication = $dateNow->diff($articleDate)->format("%a");


        if ($daysSincePublication < 2) {
            $articleScore += 3;
        } elseif ($daysSincePublication < 5 &&
            $daysSincePublication > 2
        ) {
            $articleScore += 2;
        } elseif ($daysSincePublication < 7 &&
            $daysSincePublication > 5
        ) {
            $articleScore += 1;
        }

        return $articleScore;

    }
}