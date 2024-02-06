<?php

//var_dump($_POST);
require_once 'model/DB.php';
require_once 'model/User.php';

var_dump(getCategorieId(15));

if (
    isset($_POST['nom']) &&
    isset($_POST['prenom']) &&
    isset($_POST['pseudo']) &&
    isset($_POST['email']) &&
    isset($_POST['dateNaissance']) &&
    isset($_POST['adresse']) &&
    isset($_POST['cp']) &&
    isset($_POST['pass']) &&
    isset($_POST['pass-conf'])
) {
    //echo 'OK !';

    if ($_POST['pass-conf'] == $_POST['pass']) {
        register(
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['pseudo'],
            $_POST['email'],
            $_POST['dateNaissance'],
            $_POST['adresse'],
            $_POST['cp'],
            $_POST['pass']
        );

        header('Location: index.php?page=login');

    } else {
        //echo'Les mdp ne correspondent pas !';
    }

} else {
    //echo 'NOOOOOOON !';
}


require_once 'view/register.php';
