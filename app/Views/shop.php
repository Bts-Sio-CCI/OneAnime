<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OneAnime</title>
    <link rel="stylesheet" type="text/css" href="/CSS/Category/styles.css" />
    <link rel="stylesheet" type="text/css" href="/CSS/Accueil/style.css" />
    <link rel="icon" type="images/x-icon" href="/img/logo.png" />
</head>

<body>

    <?= view('components/navbar') ?>

    <div class="shop-title-body">
        <h1 class="shop-title">Votre Panier</h1>
        <div class="shop-body">
            <div class="panier"></div>
        </div>
    </div>
    <script src="/JS/shop.js" type="application/javascript" defer></script>
</body>

</html>