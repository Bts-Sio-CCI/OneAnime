<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OneManga</title>
    <link rel="stylesheet" type="text/css" href="assets/CSS/Accueil/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/CSS/Accueil/calendar.css" />
    <link rel="icon" type="images/x-icon" href="assets/img/logo.png" />
</head>

<body>
    <?php require_once 'view/components/navbar.html'; ?>
    <section class="section-accueil">
        <h1 id="font-title"><a class="titre">OneManga</a></h1>
        <div>
            <iframe title="Location-OneManga" class="map-loc"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d719.5293304912462!2d4.368443269617919!3d43.83266526562023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b42d103fb896a9%3A0x2d491738deb25561!2sLyc%C3%A9e%20CCI%20Gard!5e0!3m2!1sfr!2sfr!4v1702372351847!5m2!1sfr!2sfr"
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <section class="section-actu">
        <div>
            <h1 id="actus"><a class="titre">Prochaines sorties :</a></h1>
            <div class="calendar"></div>
        </div>
    </section>

    <script src="old/JS/calendar.js"></script>
    <script src="old/JS/main.js"></script>
</body>

</html>