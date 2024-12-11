<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OneAnime</title>
    <link rel="stylesheet" type="text/css" href="/CSS/Category/styles.css" />
    <link rel="icon" type="images/x-icon" href="/img/logo.png" />
</head>

<body>
    <section class="barre">
        <div class="div-search">
            <input type="search" class="recherche" id="search-bar" />
        </div>
    </section>

    <?= view('components/navbar') ?>


    <section id="liste_Manga">
        <div class="manga" data-manga-id="One Piece" data-price="6.99">
            <img class="size-image" alt="OnePiece" src="/pics/Shonen/bg_one_piece.jpg" />
            <p class="description"><a>Monkey D. Luffy est un jeune aventurier qui a toujours rêvé d'une vie de liberté.
                    Quittant son village, il se lance dans un périlleux voyage à la recherche d'un trésor mythique, le
                    One Piece, afin de devenir le roi des pirates !</a></p>
            <div class="button-shop">
                <a href="index.php?page=shop" onclick="addToCart('One Piece')">
                    <span class="material-symbols-outlined"><img class="logo" alt="shop-card"
                            src="/img/shop.png" /></span>
                </a>
            </div>
        </div>
        <div class="manga" data-manga-id="Fullmetal Alchemist" data-price="7.20">
            <img class="size-image" alt="fma" src="/pics/Shonen/bg_fma.jpg" />
            <p class="description"><a>Edward Elric et son frère Alphonse Elric sont de jeunes Alchimistes. En tentant de
                    ramener leur mère à la vie, ils ont payé un lourd tribut, et ils tentent désormais de récupérer ce
                    qu'ils ont perdu. Pour cela, Edward est devenu Alchimiste d'État : le Fullmetal Alchemist.</a></p>
            <div class="button-shop">
                <a href="index.php?page=shop" onclick="addToCart('Fullmetal Alchemist')">
                    <span class="material-symbols-outlined"><img class="logo" alt="shop-card"
                            src="/img/shop.png" /></span>
                </a>
            </div>
        </div>
        <div class="manga" data-manga-id="Haikyuu!!" data-price="6.89">
            <img class="size-image" alt="Haikyu" src="/pics/Shonen/bg_haikyu.jpg" />
            <p class="description"><a>Shôyô Hinata, surnommé Shô, aime plus que tout jouer au volley-ball et ce, malgré
                    sa petite taille. Malheureusement, suite à une sévère défaite, son club de collège a été dissous,
                    tous les membres étant partis. Mais Shô est bien décidé à jouer de nouveau et choisit son futur
                    lycée en fonction de son ambition.</a></p>
            <div class="button-shop">
                <a href="index.php?page=shop" onclick="addToCart('Haikyuu!!')">
                    <span class="material-symbols-outlined"><img class="logo" alt="shop-card"
                            src="/img/shop.png" /></span>
                </a>
            </div>
        </div>
        <div class="manga" data-manga-id="HunterxHunter" data-price="7.10">
            <img class="size-image" alt="hxh" src="/pics/Shonen/bg_hxh.jpg" />
            <p class="description"><a>Abandonné par son père qui est un Hunter, à la fois un aventurier et un chasseur
                    de primes, Gon décide à l'âge de 12 ans de partir pour devenir un Hunter. Cela ne sera pas chose
                    aisée, il devra passer une suite de tests et examens en compagnie de milliers d'autres prétendants
                    au titre de Hunter.</a></p>
            <div class="button-shop">
                <a href="index.php?page=shop" onclick="addToCart('HunterxHunter')">
                    <span class="material-symbols-outlined"><img class="logo" alt="shop-card"
                            src="/img/shop.png" /></span>
                </a>
            </div>
        </div>
        <div class="manga" data-manga-id="My Hero Academia" data-price="6.95">
            <img class="size-image" alt="mha" src="/pics/Shonen/bg_mha.jpg" />
            <p class="description"><a>Dans un futur proche suite à une mutation génétique, 80% de la population mondiale
                    possède des super-pouvoirs appelés "Alters". Le plus célèbre des super-héros se nomme All Might.
                    Izuku Midoriya en est fan, et rêve d'intégrer la filière super-héroïque du lycée Yuei pour suivre
                    les traces de son idole.</a></p>
            <div class="button-shop">
                <a href="index.php?page=shop" onclick="addToCart('My Hero Academia')">
                    <span class="material-symbols-outlined"><img class="logo" alt="shop-card"
                            src="/img/shop.png" /></span>
                </a>
            </div>
        </div>
    </section>
    <section id="liste_Manga">
        <div class="manga" data-manga-id="Naruto" data-price="7.10">
            <img class="size-image" alt="Naruto" src="/pics/Shonen/bg_naruto.jpg" />
            <p class="description"><a>Le ninja le plus puissant de Konoha à l'époque, Minato Namikaze, a réussi à
                    sceller ce démon dans le corps de Naruto. C'est ainsi que douze ans plus tard, Naruto rêve de
                    devenir le plus grand Hokage de Konoha afin que tous le reconnaissent à sa juste valeur.</a></p>
            <div class="button-shop">
                <a href="index.php?page=shop" onclick="addToCart('Naruto')">
                    <span class="material-symbols-outlined"><img class="logo" alt="shop-card"
                            src="/img/shop.png" /></span>
                </a>
            </div>
        </div>
        <div class="manga" data-manga-id="Bleach" data-price="6.99">
            <img class="size-image" alt="Bleach" src="/pics/Shonen/bg_bleach.jpg" />
            <p class="description"><a>Adolescent de quinze ans, Ichigo Kurosaki possède un don particulier : celui de
                    voir les esprits. Un jour, il croise la route d'une belle Shinigami (un être spirituel) en train de
                    pourchasser une "âme perdue", un esprit maléfique qui hante notre monde et n'arrive pas à trouver le
                    repos.</a></p>
            <div class="button-shop">
                <a href="index.php?page=shop" onclick="addToCart('Bleach')">
                    <span class="material-symbols-outlined"><img class="logo" alt="shop-card"
                            src="/img/shop.png" /></span>
                </a>
            </div>
        </div>
        <div class="manga" data-manga-id="Dragon Ball" data-price="6.99">
            <img class="size-image" alt="db" src="/pics/Shonen/bg_db.jpg" />
            <p class="description"><a>L'histoire de Dragon Ball suit la vie de Son Goku, un garçon à la queue de singe
                    inspiré du conte traditionnel chinois La Pérégrination vers l'Ouest. Son Goku est un jeune garçon
                    simple d'esprit et pur doté d'une queue de singe et d'une force extraordinaire.</a></p>
            <div class="button-shop">
                <a href="index.php?page=shop" onclick="addToCart('Dragon Ball')">
                    <span class="material-symbols-outlined"><img class="logo" alt="shop-card"
                            src="/img/shop.png" /></span>
                </a>
            </div>
        </div>
        <div class="manga" data-manga-id="One Punch Man" data-price="7.20">
            <img class="size-image" alt="opm" src="/pics/Shonen/bg_opm.jpg" />
            <p class="description"><a>Lorsque le super-héros Saitama se présente à ses ennemis, ces derniers ne le
                    prennent jamais au sérieux. Il faut dire qu'entre sa carrure (plutôt banale) et son allure
                    désinvolte, il n'y a pas vraiment de quoi avoir peur... surtout pour un être surpuissant qui a déjà
                    causé d'impressionnants ravages. Toutefois, il faut toujours se méfier des apparences car Saitama
                    possède une puissance colossale, qui lui permet de terrasser ses adversaires en un seul coup !</a>
            </p>
            <div class="button-shop">
            <a href="<?= url_to('user_shop') ?>" onclick="addToCart('One Punch Man')">
                    <span class="material-symbols-outlined"><img class="logo" alt="shop-card"
                            src="/img/shop.png" /></span>
                </a>
            </div>
        </div>
    </section>
    <script src="/JS/shop.js" type="application/javascript" defer></script>
</body>

</html>