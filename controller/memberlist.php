<?php
//var_dump(($_SESSION['userID']));
require_once 'model/DB.php';
require_once 'model/User.php';
require_once 'model/Category.php';

$cnx = connect_bd('onemanga');

if ((isset ($_SESSION['userID']) && ($_SESSION['userID'] == 1))) {

    if ($cnx) {
        //var_dump($_REQUEST);
        if (isset ($_REQUEST['delete'])) {
            $idUtilisateur = isset ($_REQUEST['cle']) ? $_REQUEST['cle'] : null;

            if ($idUtilisateur !== null) {
                $result = $cnx->prepare("DELETE FROM utilisateur WHERE idUtilisateur = :cle");
                $result->bindParam(':cle', $idUtilisateur, PDO::PARAM_INT);
                $result->execute();
                //var_dump($result);
            } else {
                echo "Erreur: idUtilisateur non spécifié.";
            }
        } elseif (isset ($_REQUEST['update'])) {

            $idUtilisateur = isset ($_REQUEST['cle']) ? $_REQUEST['cle'] : null;
            if ($idUtilisateur !== null) {
                $nom = htmlspecialchars($_REQUEST['nom']);
                $prenom = htmlspecialchars($_REQUEST['prenom']);
                $email = htmlspecialchars($_REQUEST['email']);
                $dateNaissance = htmlspecialchars($_REQUEST['dateNaissance']);
                $adresse = htmlspecialchars($_REQUEST['adresse']);
                $login = htmlspecialchars($_REQUEST['nomUtilisateur']);

                $result = $cnx->prepare("UPDATE utilisateur SET nom=:nom, prenom=:prenom, email=:email, dateNaissance=:dateNaissance, adresse=:adresse, nomUtilisateur=:nomUtilisateur WHERE idUtilisateur=:cle");
                $result->bindParam(':cle', $idUtilisateur, PDO::PARAM_INT);
                $result->bindParam(':nom', $nom, PDO::PARAM_STR);
                $result->bindParam(':prenom', $prenom, PDO::PARAM_STR);
                $result->bindParam(':email', $email, PDO::PARAM_STR);
                $result->bindParam(':dateNaissance', $dateNaissance, PDO::PARAM_STR);
                $result->bindParam(':adresse', $adresse, PDO::PARAM_STR);
                $result->bindParam(':nomUtilisateur', $login, PDO::PARAM_STR);

                $result->execute();
                // var_dump($result);
            } else {
                echo "Erreur: idUtilisateur non spécifié.";
            }
        }
        include 'view/memberlist.php';
    }



} else {

    header("Location:../index.php?page=accueil ");

}



