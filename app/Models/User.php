<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    function calculerAge($dateNaissance)
    {
        $dateNaissance = new DateTime($dateNaissance);
        $dateActuelle = new DateTime();

        $difference = $dateActuelle->diff($dateNaissance);

        $age = $difference->y;

        return $age;
    }

    function calculerMoy()
    {
        $cnx = connect_bd('onemanga');
        $moy = $cnx->prepare("SELECT AVG(age) FROM utilisateur");
        $moy->execute();
        return $moy;
    }

    function getCategorieId($age)
    {
        // SELECT idCateg 
        // FROM catégorie
        // WHERE ageMini <  19
        // AND ageMaxi >=  19
        $cnx = connect_bd('onemanga');

        $stmt = $cnx->prepare("SELECT idCateg FROM catégorie WHERE ageMini<=:age AND ageMaxi >= :age");
        $stmt->execute(['age' => $age]);
        $categorie = $stmt->fetch();

        return $categorie["idCateg"];
    }

    function getUsersByCategories($idCategorie)
    {
        $cnx = connect_bd('onemanga');

        $stmt = $cnx->prepare("SELECT * FROM utilisateur WHERE idCateg = :idCat");
        $stmt->execute(['idCat' => $idCategorie]);
        $users = $stmt->fetchAll();

        return $users;

        if ($cnx) {
            $result = $cnx->prepare("INSERT INTO utilisateur (nom, prenom, email, dateNaissance, adresse, nomUtilisateur) VALUES (:nom, :prenom, :email, :dateNaissance, :adresse, :nomUtilisateur)");
            $result->bindParam(':nom', $nom, PDO::PARAM_STR);
            $result->bindParam(':prenom', $prenom, PDO::PARAM_STR);
            $result->bindParam(':email', $email, PDO::PARAM_STR);
            $result->bindParam(':dateNaissance', $dateNaissance, PDO::PARAM_STR);
            $result->bindParam(':adresse', $adresse, PDO::PARAM_STR);
            $result->bindParam(':nomUtilisateur', $login, PDO::PARAM_STR);
            $result->execute();

            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "Erreur de connexion à la base de données.";
        }
    }
    deconnect_bd('onemanga');
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}

