<?php

require_once(ROOT . "/Model/Repository/UserRepository.php");
require_once(ROOT . "PasswordHasherInterface.php")

class StrongPasswordHasher implements PasswordHasherInterface
{
    public function hashPassword($password): string
    {
        $options = [
            'cost' => 15,
        ];

        return password_hash($password, PASSWORD_BCRYPT, $options);
    }
}
