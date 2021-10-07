<?php

interface EntityInterface
{
    public function getTableName() : string;
    public function getId() : int;
}