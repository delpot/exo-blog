<?php

require_once(ROOT . "/Model/Entity/Article.php");
require_once(ROOT . "ScoreCalculatorInterface.php");

class ArticleLengthScoreCalculator implements ScoreCalculatorInterface
{
    public function calculateScore(float $articleScore, Article $article): float
    {
        $lengthContent = strlen($article->getContent());

        if ($lengthContent > 50) {
            $articleScore += 3;
        } elseif ($lengthContent < 50 &&
            $lengthContent > 30
        ) {
            $articleScore += 2;
        } elseif ($lengthContent < 30 &&
            $lengthContent > 10
        ) {
            $articleScore += 1;
        }

        return $articleScore;

    }
}
