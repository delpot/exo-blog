<?php

require_once(ROOT . "/Model/Repository/UserRepository.php");

class EmailSender
{
    public function sendEmail($email): void
    {
        $userRepository = new UserRepository();
        $user = $userRepository->findByEmail($email);

        if ($user) {
            $msg = "Bonjour " . $user->getUsername() . ", merci d'avoir créer un compte chez nous !";
            mail($email, "Création de compte", $msg);
            echo $msg;
        }
    }
}
