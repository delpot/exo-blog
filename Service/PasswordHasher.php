<?php

require_once(ROOT . "/Model/Repository/UserRepository.php");

class PasswordHasher
{
    public function hash($password): string
    {
        $options = [
            'cost' => 12,
        ];

        return password_hash($password, PASSWORD_BCRYPT, $options);
    }
}
