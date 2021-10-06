<?php

require_once(ROOT . '/Model/Entity/User.php');

class UserFactory
{
    public function createUser(string $username, string $password, string $email): User
    {
        $user = new User();
        $user->setUsername($username);
        $user->setEmail($email);

        $options = [
            'cost' => 12,
        ];

        $passwordHash = password_hash($password, PASSWORD_BCRYPT, $options);
        $user->setPassword($passwordHash);

        return $user;
    }

    public function createUserFromDb(array $userFromDb): User
    {
        $userEntity = new User();
        $UserEntity->setId($userFromDb['id']);
        $userEntity->setUsername($userFromDb['username']);
        $userEntity->setPassword($userFromDb['password']);
        $userEntity->setEmail($userFromDb['email']);

        return $userEntity;
    }

}
