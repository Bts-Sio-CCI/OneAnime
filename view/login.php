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
        <?php require_once 'view/components/navbar.html' ?>
        <div class="login-form">
            <form action="" method="post">
                <h2 class="text-center">Connexion</h2>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" class="form-control" placeholder="Adresse Mail" required="required" />
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input id="password" type="password" name="pass" class="form-control" placeholder="Mot de passe" required="required" />
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                </div>
            </form>
            <p class="text-center"><a href="?page=register">Pas encore de compte ?</a></p>
        </div>
    </body>
</html>