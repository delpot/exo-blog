<?php

require_once(ROOT . "/Model/Entity/Article.php");

class ScoreCalculatorInterface
{
    public function calculateScore(): float;
}