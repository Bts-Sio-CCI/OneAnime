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
            <input type="search" aria-label="button-search" class="recherche" id="search-bar" />
        </div>
    </section>
    <?= view('components/navbar') ?>

    <section id="liste_Manga">
        <div class="manga" data-manga-id="Sevens Deadly Sins" data-price="7.20">
            <img class="size-image" alt="7ds" src="/pics/Fantasy/bg_7ds.jpg" />
            <p class="description"><a>Un beau jour, une mystérieuse jeune fille s'écroule dans la taverne de Meliodas,
                    un garçon enjoué qui parcourt le monde en compagnie de son cochon loquace. Cette jeune fille n'est
                    autre que la princesse Elizabeth qui désire ardemment retrouver les Seven Deadly Sins.</a></p>
            <div class="button-shop">
                <a href="<?= url_to('user_shop') ?>" onclick="addToCart('Sevens Deadly Sins')">
                    <span class="material-symbols-outlined"><img class="logo" alt="shop-card"
                            src="/img/shop.png" /></span>
                </a>
            </div>
        </div>
        <div class="manga" data-manga-id="Black Clover" data-price="6.89">
            <img class="size-image" alt="blackclover" src="/pics/Fantasy/bg_blackclover.jpg" />
            <p class="description"><a>Dans un monde régi par la magie, Yuno et Asta ont grandi ensemble avec un seul but
                    en tête : devenir le prochain Empereur-Mage du royaume de Clover. Mais si le premier est
                    naturellement doué, le deuxième, quant à lui, ne sait pas manipuler la magie.</a></p>
            <div class="button-shop">
            <a href="<?= url_to('user_shop') ?>" onclick="addToCart('Black Clover')">
                    <span class="material-symbols-outlined"><img class="logo" alt="shop-card"
                            src="/img/shop.png" /></span>
                </a>
            </div>
        </div>
        <div class="manga" data-manga-id="Fairy Tail" data-price="7.20">
            <img class="size-image" alt="fairytail" src="/pics/Fantasy/bg_fairytail.jpg" />
            <p class="description"><a>Lucy, jeune femme, rêve de devenir magicienne. Pour y arriver, elle doit devenir
                    membre d'une guilde, la plus prestigieuse est Fairy Tail. C'est alors qu'elle rencontre Natsu,
                    magicien du feu et membre de la célèbre guilde. Il va l'introduire auprès de ses camarades
                    magiciens, où de nombreuses tâches les attendent …</a></p>
            <div class="button-shop">
            <a href="<?= url_to('user_shop') ?>" onclick="addToCart('Fairy Tail')">
                    <span class="material-symbols-outlined"><img class="logo" alt="shop-card"
                            src="/img/shop.png" /></span>
                </a>
            </div>
        </div>
        <div class="manga" data-manga-id="Frieren" data-price="7.95">
            <img class="size-image" alt="Frieren" src="/pics/Fantasy/bg_frieren.jpg" />
            <p class="description"><a>Le jeune héros Himmel et ses compagnons, l'elfe Frieren, le nain Eisen et le
                    prêtre Heiter, rentrent victorieux de leur combat contre le roi des démons. Au bout de dix années
                    d'efforts, ils ont ramené la paix dans le royaume. Il est temps pour eux de retrouver une vie
                    normale... Difficile à imaginer après tant d'aventures en commun !</a></p>
            <div class="button-shop">
            <a href="<?= url_to('user_shop') ?>" onclick="addToCart('Frieren')">
                    <span class="material-symbols-outlined"><img class="logo" alt="shop-card"
                            src="/img/shop.png" /></span>
                </a>
            </div>
        </div>
        <div class="manga" data-manga-id="Goblin Slayer" data-price="7.95">
            <img class="size-image" alt="goblinslayer" src="/pics/Fantasy/bg_goblinslayer.jpg" />
            <p class="description"><a>Une jeune prêtresse vient de former son premier groupe d'aventuriers, cependant
                    ils se trouvent rapidement dans une situation dangereuse. Attaqués par une troupe de gobelins, ils
                    se font sauver par le "Goblin Slayer", une personne qui voue sa vie à l'extermination des gobelins,
                    et par n'importe quel moyen.</a></p>
            <div class="button-shop">
            <a href="<?= url_to('user_shop') ?>" onclick="addToCart('Goblin Slayer')">
                    <span class="material-symbols-outlined"><img class="logo" alt="shop-card"
                            src="/img/shop.png" /></span>
                </a>
            </div>
        </div>
    </section>
    <section id="liste_Manga">
        <div class="manga" data-manga-id="Log Horizon" data-price="20.90">
            <img class="size-image" alt="loghorizon" src="/pics/Fantasy/bg_loghorizon.jpg" />
            <p class="description"><a>Shiroe est amateur de MMORPG. Un jour, alors qu'il joue à Elder Tales, il se
                    retrouve piégé dans le jeu avec 30 000 autres personnes. Désormais, impossible d'utiliser le bouton
                    de log out ou de se faire tuer. Peu à peu, les joueurs perdent la volonté de jouer, comprenant
                    qu'ils y finiront leur vie.</a></p>
            <div class="button-shop">
            <a href="<?= url_to('user_shop') ?>" onclick="addToCart('Log Horizon')">
                    <span class="material-symbols-outlined"><img class="logo" alt="shop-card"
                            src="/img/shop.png" /></span>
                </a>
            </div>
        </div>
    </section>
    <script src="../JS/shop.js" type="application/javascript" defer></script>
</body>

</html>