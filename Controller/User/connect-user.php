<?php

require_once('../../Config/config.php');

require_once(ROOT . '/Model/Repository/UserRepository.php');

$message = "";

if (!empty($_POST['username']) && !empty($_POST['password'])) {
    
    $userRepository = new UserRepository();
    $user = $userRepository->findByUsername($_POST["username"]);
    $message = "Vos identifiants ne sont pas valides!";

    if ($user) {
    
        if (password_verify($_POST['password'], $user->getPassword())) {
    
            $message = "Vos identifiants sont valides!";
        
        }
    
    }

}

echo $message;

require_once(ROOT . "/View/User/connect-user.php");