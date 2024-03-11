<?php
require_once('model/User.php'); // PROBLEME ICI

// Établissement de la connexion

if ((isset($_SESSION['userID']) && ($_SESSION['userID'] == 1))) {

    // Affichage du formulaire d'inscription
    echo '<form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">';
    echo '<h2>Listage des utilisateur</h2>';
    echo '<label for="nom">Nom :</label>';
    echo '<input type="text" name="nom" required><br>';
    echo '<label for="prenom">Prénom :</label>';
    echo '<input type="text" name="prenom" required><br>';
    echo '<label for="email">Email :</label>';
    echo '<input type="email" name="email" required><br>';
    echo '<label for="dateNaissance">Date de Naissance :</label>';
    echo '<input type="date" name="dateNaissance" required><br>';

    echo '</select><br>';
    echo '<label for="adresse">Adresse :</label>';
    echo '<input type="text" name="adresse" required><br>';
    echo '<label for="nomUtilisateur">Login :</label>';
    echo '<input type="text" name="nomUtilisateur" required><br>';
    echo '<input type="submit" name="inscription" value="Inscription">';
    echo '</form>';

    // Affichage des résultats
    $query = 'SELECT * FROM utilisateur WHERE 1';

    $result->execute();

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
            echo "<form action=" . $_SERVER['PHP_SELF'] . " method='post'>";
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