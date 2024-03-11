<?php

function register($nom, $prenom, $pseudo, $email, $dateNaissance, $adresse, $cp, $password)
{
    global $pdo;

    $prenom = htmlspecialchars($prenom);
    $nom = htmlspecialchars($nom);
    $pseudo = htmlspecialchars($pseudo);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $adresse = htmlspecialchars($adresse);
    $cp = filter_var($cp, FILTER_SANITIZE_NUMBER_INT);
    $idCateg = getCategorieId(calculerAge($dateNaissance));


    $stmt = $pdo->prepare("INSERT INTO utilisateur (nom, prenom, nomUtilisateur,email,dateNaissance,adresse,CP,motDePasse, idCateg)
    VALUES(:nom,:prenom, :pseudo, :email, :dateNaissance, :adresse, :cp, :password, :idCateg)");

    $stmt->execute([
        'nom' => $nom,
        'prenom' => $prenom,
        'pseudo' => $pseudo,
        'email' => $email,
        'dateNaissance' => $dateNaissance,
        'adresse' => $adresse,
        'cp' => $cp,
        'password' => $password,
        'idCateg' => $idCateg,
    ]);

}

function login($email, $password)
{
    global $pdo;

    $stmt = $pdo->prepare("SELECT email, motDePasse, idUtilisateur 
    FROM utilisateur WHERE email = :email");

    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    if ($user) {
        $passVerif = password_verify($password, $user['motDePasse']);
        if ($passVerif) {
            $_SESSION['userID'] = $user['idUtilisateur'];

            return true;
        }
    }
    return false;
}

function calculerAge($dateNaissance)
{
    $dateNaissance = new DateTime($dateNaissance);
    $dateActuelle = new DateTime();

    $difference = $dateActuelle->diff($dateNaissance);

    $age = $difference->y;

    return $age;
}

function getCategorieId($age)
{
    // SELECT idCateg 
    // FROM catégorie
    // WHERE ageMini <  19
    // AND ageMaxi >=  19
    global $pdo;

    $stmt = $pdo->prepare("SELECT idCateg FROM catégorie WHERE ageMini<=:age AND ageMaxi >= :age");
    $stmt->execute(['age' => $age]);
    $categorie = $stmt->fetch();

    return $categorie["idCateg"];
}

function getUsersByCategories($idCategorie)
{
    global $pdo;

    $stmt = $pdo->prepare("SELECT * FROM utilisateur WHERE idCateg = :idCat");
    $stmt->execute(['idCat' => $idCategorie]);
    $users = $stmt->fetchAll();

    return $users;
}


function getUsers()
{
    global $pdo;

    $stmt = $pdo->prepare("SELECT * FROM utilisateur");
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $users;
}