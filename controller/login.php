<?php

    
    require_once 'model/DB.php';
    require_once 'model/User.php';
    
    if(
        isset($_POST['email']) &&
        isset($_POST['pass'])
    ) {
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        
        $connectResult = login($email, $_POST['pass']);
        if($connectResult) {
            header("Location: index.php?page=forum");
            exit();           
        } else {
            echo'Mot de passe erroné';
        }

    }



    require_once 'view/login.php';