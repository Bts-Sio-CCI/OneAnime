<?php
require_once('model/fonction.php');

// Établissement de la connexion
try {
    $cnx = connect_bd('utilisateur');

    // Traitement de l'inscription
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['inscription'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $dateNaissance = htmlspecialchars($_POST['dateNaissance']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $login = htmlspecialchars($_POST['nomUtilisateur']);

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

    if ($cnx) {
        if (isset($_REQUEST['delete'])) {
            echo "dans delete";
            $idUtilisateur = isset($_REQUEST['cle']) ? $_REQUEST['cle'] : null;
            if ($idUtilisateur !== null) {
                $result = $cnx->prepare("DELETE FROM utilisateur WHERE idUtilisateur = :cle");
                $result->bindParam(':cle', $idUtilisateur, PDO::PARAM_INT);
                $result->execute();
            } else {
                echo "Erreur: idUtilisateur non spécifié.";
            }
        } elseif (isset($_REQUEST['update'])) {
            echo "dans update";
            $idUtilisateur = isset($_REQUEST['cle']) ? $_REQUEST['cle'] : null;
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
            } else {
                echo "Erreur: idUtilisateur non spécifié.";
            }
        }

        // Affichage du formulaire d'inscription
        echo '<form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">';
        echo '<h2>Listage des utilisateurs</h2>';
        echo '<label for="nom">Nom :</label>';
        echo '<input type="text" name="nom" required><br>';
        echo '<label for="prenom">Prénom :</label>';
        echo '<input type="text" name="prenom" required><br>';
        echo '<label for="email">Email :</label>';
        echo '<input type="email" name="email" required><br>';
        echo '<label for="dateNaissance">Date de Naissance :</label>';
        echo '<input type="date" name="dateNaissance" required><br>';
        echo '<label for="adresse">Adresse :</label>';
        echo '<input type="text" name="adresse" required><br>';
        echo '<label for="nomUtilisateur">Login :</label>';
        echo '<input type="text" name="nomUtilisateur" required><br>';
        echo '<input type="submit" name="inscription" value="Inscription">';
        echo '</form>';

        // Affichage des résultats
        $query = 'SELECT idUtilisateur, nom, prenom, email, dateNaissance, adresse, nomUtilisateur FROM utilisateur';

        $result = $cnx->prepare($query);

        $result->execute();

        if ($result->rowCount() > 0) {
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>idUtilisateur</th>";
            echo "<th>Nom</th>";
            echo "<th>Prénom</th>";
            echo "<th>Email</th>";
            echo "<th>Date de Naissance</th>";
            echo "<th>Adresse</th>";
            echo "<th>Login</th>";
            echo "<th>Modifier</th>";
            echo "<th>Supprimer</th>";
            echo "</tr>";

            while ($donnees = $result->fetch()) {
                echo "<form action=" . htmlspecialchars($_SERVER['PHP_SELF']) . " method='POST'>";
                echo "<input type='hidden' name='cle' value='" . $donnees['idUtilisateur'] . "'>"; // Ajout du champ caché pour l'identifiant de l'utilisateur
                echo "<tr>";
                echo "<td>" . $donnees['idUtilisateur'] . "</td>";
                echo "<td><input type='text' name='nom' size='20' value='" . $donnees['nom'] . "'></td>";
                echo "<td><input type='text' name='prenom' size='20' value='" . $donnees['prenom'] . "'></td>";
                echo "<td><input type='text' name='email' size='20' value='" . $donnees['email'] . "'></td>";
                echo "<td><input type='text' name='dateNaissance' size='20' value='" . $donnees['dateNaissance'] . "'></td>";
                echo "<td><input type='text' name='adresse' size='20' value='" . $donnees['adresse'] . "'></td>";
                echo "<td><input type='text' name='nomUtilisateur' size='20' value='" . $donnees['nomUtilisateur'] . "'></td>";
                echo "<td><input type='submit' name='update' value='Modifier'></td>";
                echo "<td><input type='submit' name='delete' value='Supprimer'></td>";
                echo "</tr>";
                echo "</form>";
            }
            echo "</table>";
        } else {
            echo "Aucun enregistrement, désolé";
        }
        deconnect_bd('utilisateur');
    }
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>