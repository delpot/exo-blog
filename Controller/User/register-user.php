<?php

require_once('../../Config/config.php');

require_once(ROOT . "/View/User/register-user.php");
require_once(ROOT . '/Model/Factory/UserFactory.php');
require_once(ROOT . "/Model/EntityManager.php");


if (!empty($_POST['username']) && 
    !empty($_POST['password']) &&
    !empty($_POST['email'])) {
    
    $userFactory = new UserFactory();
    $user = $userFactory->createUser($_POST["username"], $_POST["email"], $_POST["password"]);

    $entityManager = new EntityManager();
    $entityManager->persistUser($user);
    
    echo "Vous êtes enregistré!";
}