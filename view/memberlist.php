<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OneAnime</title>
    <link rel="stylesheet" type="text/css" href="assets/CSS/Accueil/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/CSS/Forum/styles.css" />
    <link rel="icon" type="images/x-icon" href="/assets/img/logo.png" />
</head>

<body>
    <?php require_once 'view/components/navbar.html' ?>
    <form class="form-categ" action="" method="post">
        <h2 class="text-center">Recherchez un membre par catégorie</h2>
        <select name="categ-select" id="categ-select">
            <option value="">Aucune catégorie</option>
            <?php foreach ($categories as $categorie) { ?>
                <option value="<?php echo $categorie["idCateg"] ?>">
                    <?php echo $categorie["nomCateg"] ?>
                </option>
            <?php } ?>
        </select>
        <input type="submit" value="Envoyez">
    </form>
    <table>
        <tr>
            <th>ID utilisateur</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
            <th>Adresse mail</th>
            <th>Nom utilisateur</th>
            <th>Adresse</th>
            <th>Code postal</th>
            <th>ID catégorie</th>
        </tr>
        <tr>
            <?php foreach ($users as $user) { ?>
                <td>
                    <?php echo $user['idUtilisateur'] ?>
                </td>
                <td>
                    <?php echo $user['nom'] ?>
                </td>
                <td>
                    <?php echo $user['prenom'] ?>
                </td>
                <td>
                    <?php echo $user['dateNaissance'] ?>
                </td>
                <td>
                    <?php echo $user['email'] ?>
                </td>
                <td>
                    <?php echo $user['nomUtilisateur'] ?>
                </td>
                <td>
                    <?php echo $user['adresse'] ?>
                </td>
                <td>
                    <?php echo $user['CP'] ?>
                </td>
                <td>
                    <?php echo $user['idCateg'] ?>
                </td>
            <?php } ?>
        </tr>
    </table>
</body>

</html>