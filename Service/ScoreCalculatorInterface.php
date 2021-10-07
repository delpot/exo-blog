<?php

require_once(ROOT . "/Model/Entity/Article.php");

interface ScoreCalculatorInterface
{
    public function calculateScore(float $articleScore, Article $article): float;
}