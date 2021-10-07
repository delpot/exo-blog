<?php

require_once(ROOT . "/Model/Entity/Publishable.php");

class Category extends Publishable
{
    private string $color;

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getTableName(): string
    {
        return "category";
    }
}