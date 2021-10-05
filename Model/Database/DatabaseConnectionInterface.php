<?php


interface DatabaseConnectionInterface
{

    public function connect(): ?PDO;
}
