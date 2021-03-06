<?php

require_once(ROOT . "/Model/Repository/UserRepository.php");
require_once(ROOT . "PasswordHasherInterface.php")

class PasswordHasher implements PasswordHasherInterface
{
    public function hashPassword($password): string
    {
        $options = [
            'cost' => 12,
        ];

        return password_hash($password, PASSWORD_BCRYPT, $options);
    }
}
