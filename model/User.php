<?php


require_once ('DB.php');



// Établissement de la connexion
try {

    function register($nom, $prenom, $pseudo, $email, $dateNaissance, $adresse, $cp, $password)
    {
        $cnx = connect_bd('onemanga');

        $prenom = htmlspecialchars($prenom);
        $nom = htmlspecialchars($nom);
        $pseudo = htmlspecialchars($pseudo);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $adresse = htmlspecialchars($adresse);
        $cp = filter_var($cp, FILTER_SANITIZE_NUMBER_INT);
        $idCateg = getCategorieId(calculerAge($dateNaissance));


        $stmt = $cnx->prepare("INSERT INTO utilisateur (nom, prenom, nomUtilisateur,email,dateNaissance,adresse,CP,motDePasse, idCateg)
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
        $cnx = connect_bd('onemanga');

        $stmt = $cnx->prepare("SELECT email, motDePasse, idUtilisateur 
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