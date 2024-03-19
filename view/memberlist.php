<?php
require_once ('model/User.php');

// Établissement de la connexion

if ((isset ($_SESSION['userID']) && ($_SESSION['userID'] == 1))) {

    $query = 'SELECT * FROM utilisateur';
    echo "LISTE DES UTILISATEURS";
    $result = $cnx->query($query);
    //var_dump($result);
    if ($result->rowCount() > 0) {
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>idUtilisateur</th>";
        echo "<th>Nom</th>";
        echo "<th>Prenom</th>";
        echo "<th>email</th>";
        echo "<th>dateNaissance</th>";
        echo "<th>Adresse</th>";
        echo "<th>Pseudo</th>";
        echo "<th>Modifier</th>";
        echo "<th>Supprimer</th>";
        echo "</tr>";

        while ($donnees = $result->fetch()) {
            echo "<form action='#' method='post'>";
            echo "<input type='hidden' name='cle' value='" . $donnees['idUtilisateur'] . "'>";
            echo "<tr>";
            echo "<td>" . $donnees['idUtilisateur'] . "</td>";
            echo "<td><input type='text' name='nom'size='20' value='" . $donnees['nom'] . "'></td>";
            echo "<td><input type='text' name='prenom'size='20' value='" . $donnees['prenom'] . "'></td>";
            echo "<td><input type='text' name='email'size='20' value='" . $donnees['email'] . "'></td>";
            echo "<td><input type='text' name='dateNaissance'size='20' value='" . $donnees['dateNaissance'] . "'></td>";
            echo "<td><input type='text' name='adresse'size='20' value='" . $donnees['adresse'] . "'></td>";
            echo "<td><input type='text' name='nomUtilisateur'size='20' value='" . $donnees['nomUtilisateur'] . "'></td>";
            echo "<td><input type='submit' name='update' value='Modifier'></td>";
            echo "<td><input type='submit' name='delete' value='Supprimer'></td>";
            echo "</tr>";
            echo "</form>";
        }
        echo "</table>";
    } else {
        echo "Aucun enregistrement, désolé";
    }
}