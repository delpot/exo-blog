<?php

interface PasswordHasherInterface 
{
    public function hashPassword($clearPassword) : string;
}