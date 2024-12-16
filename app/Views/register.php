<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OneAnime - Inscription</title>
    <link rel="stylesheet" type="text/css" href="/CSS/Accueil/style.css" />
    <link rel="stylesheet" type="text/css" href="/CSS/Forum/styles.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="icon" type="images/x-icon" href="/img/logo.png" />
</head>

<body>
    <?= view('components/navbar') ?>
    <div class="register-form">
        <?php if (session()->getFlashdata('errors')): ?>
            <div class="alert alert-danger">
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <p><?= $error ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <form action="<?= base_url('register/store') ?>" method="post">
            <h2 class="text-center">Inscription</h2>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input id="nom" type="text" name="nom" class="form-control" placeholder="Nom" required="required" />
            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input id="prenom" type="text" name="prenom" class="form-control" placeholder="Prénom" required="required" />
            </div>
            <div class="form-group">
                <label for="pseudo">Pseudo</label>
                <input id="pseudo" type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" class="form-control" placeholder="Adresse mail" required="required" />
            </div>
            <div class="form-group">
                <label for="dateNaissance">Date de naissance</label>
                <input id="dateNaissance" type="date" name="dateNaissance" class="form-control" placeholder="Date Naissance" required="required" />
            </div>
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input id="adresse" type="text" name="adresse" class="form-control" placeholder="Adresse postale" required="required" />
            </div>
            <div class="form-group">
                <label for="cp">Code postal</label>
                <input id="cp" type="text" name="cp" pattern="[0-9]*" class="form-control" placeholder="Code postal" required="required" />
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input id="password" type="password" name="pass" class="form-control" placeholder="Mot de passe" required="required" />
            </div>
            <div class="form-group">
                <label for="confirmPass">Confirmer le mot de passe</label>
                <input id="confirmPass" type="password" name="pass-conf" class="form-control" placeholder="Confirmer le mot de passe" required="required" />
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
            </div>
        </form>
        <p class="text-center"><a href="<?= base_url('login') ?>">Déjà un compte ?</a></p>
    </div>
</body>

</html>