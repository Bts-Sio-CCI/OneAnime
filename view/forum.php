<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>OneAnime</title>
        <link rel="stylesheet" type="text/css" href="assets/CSS/Accueil/style.css" />
        <link rel="stylesheet" type="text/css" href="assets/CSS/Forum/styles.css" />
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="icon" type="images/x-icon" href="/assets/img/logo.png" />
    </head>

    <body>
        <?php require_once'view/components/navbar.html'?> 
        <form class="disconnect-button" action="" method="post">
            <button type="submit" name="disconnect" value="1">Déconnexion
        </form>
    </body>
</html>

