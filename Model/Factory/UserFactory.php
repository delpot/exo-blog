<?php

require_once(ROOT . '/Model/Entity/User.php');
require_once(ROOT . "/Service/PasswordHasher.php");
require_once(ROOT . "/Service/EmailSender.php");

class UserFactory
{
    public function createUser(string $username, string $password, string $email): User
    {
        $user = new User();
        $user->setUsername($username);
        $user->setEmail($email);

        $passwordHasher = new PasswordHasher();
        $user->setPassword($passwordHasher->hash($password));

        $emailSender = new EmailSender();
        $emailSender->sendEmail($user->getEmail());

        return $user;
    }

    public function createUserFromDb(array $userFromDb): User
    {
        $userEntity = new User();
        $userEntity->setId($userFromDb['id']);
        $userEntity->setUsername($userFromDb['username']);
        $userEntity->setPassword($userFromDb['password']);
        $userEntity->setEmail($userFromDb['email']);

        return $userEntity;
    }

}
