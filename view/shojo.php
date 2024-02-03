<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>OneAnime</title>
        <link rel="stylesheet" type="text/css" href="assets/CSS/Category/styles.css" />
        <link rel="icon" type="images/x-icon" href="assets/logo.png" />
    </head>
    <body>
        <section class="barre">
            <div class="div-search">
                <input type="search" class="recherche" id="search-bar" />
            </div>
        </section>
        <?php require_once 'view/components/navbar.html'; ?>

        <section id="liste_Manga">
            <div class="manga" data-manga-id="Fruits Basket" data-price="9.24">
                <img class="size-image" alt="Fruits_Basket" src="assets/pics/Shojo/bg_fruits_basket.jpg" />
                <p class="description"><a>Tohru Honda, jeune orpheline de seize ans ayant perdu sa mère dans un tragique accident de voiture, vit seule dans une tente sur un terrain vague. C'était sans compter sur la générosité du propriétaire du terrain, Shigure Soma, qui lui propose de l'héberger le temps qu'elle retrouve un logement décent.</a></p>
                <div class="button-shop">
                    <a href="index.php?page=shop" onclick="addToCart('Fruits Basket')">
                        <span class="material-symbols-outlined"><img class="logo" alt="shop-card" src="assets/img/shop.png" /></span>
                    </a>
                </div>
            </div>
            <div class="manga" data-manga-id="Nana" data-price="7.29">
                <img class="size-image" alt="Nana" src="assets/pics/Shojo/bg_nana.jpg" />
                <p class="description"><a>Quand l'une rêve de triomphe pour son groupe de rock les BlackStones, l'autre ne recherche qu'un mari parfait pour fonder un foyer. Au gré des aventures de ces deux filles, l'une orpheline versée dans le gothique et l'autre fashion victime incapable de travailler, se tisse une amitié et une success story passionnante.</a></p>
                <div class="button-shop">
                    <a href="index.php?page=shop" onclick="addToCart('Nana')">
                        <span class="material-symbols-outlined"><img class="logo" alt="shop-card" src="assets/img/shop.png" /></span>
                    </a>
                </div>
            </div>
            <div class="manga" data-manga-id="Orange" data-price="7.95">
                <img class="size-image" alt="Orange" src="assets/pics/Shojo/bg_orange.jpg" />
                <p class="description"><a>Naho est une jeune lycéenne de seize ans vivant à Matsumoto, dans la préfecture de Nagano. Son quotidien est bouleversé par la réception d'une lettre du futur. Elle aurait été écrite par Naho elle-même, dix ans plus tard. Cette Naho a désormais vingt-six ans et est rongée par les remords.</a></p>
                <div class="button-shop">
                    <a href="index.php?page=shop" onclick="addToCart('Orange')">
                        <span class="material-symbols-outlined"><img class="logo" alt="shop-card" src="assets/img/shop.png" /></span>
                    </a>
                </div>
            </div>
            <div class="manga" data-manga-id="Maid Sama" data-price="7.20">
                <img class="size-image" alt="MaidSama" src="assets/pics/Shojo/bg_maidsama.jpg" />
                <p class="description"><a>Dans son lycée, Misaki, la présidente des élèves, terrorise les garçons en leur imposant des règles strictes pour préserver la tranquilité des filles ! D'autre part, depuis que son père les a abandonnées, sa mère et elle, elle est obligée de travailler après les cours.</a></p>
                <div class="button-shop">
                    <a href="index.php?page=shop" onclick="addToCart('Maid Sama')">
                        <span class="material-symbols-outlined"><img class="logo" alt="shop-card" src="assets/img/shop.png" /></span>
                    </a>
                </div>
            </div>
            <div class="manga" data-manga-id="Sailor Moon" data-price="7.20">
                <img class="size-image" alt="Sailormoon" src="assets/pics/Shojo/bg_sailormoon.jpg" />
                <p class="description"><a>Une collégienne de 14 ans nommée Bunny Tsukino découvre qu'elle a été élue pour devenir la justicière Sailor Moon. Elle sera chargée de retrouver la princesse de la Lune, l'héritière du trône du Millenium d'argent, mais aussi le Cristal d'argent, une pierre précieuse aux pouvoirs surpuissants.</a></p>
                <div class="button-shop">
                    <a href="index.php?page=shop" onclick="addToCart('Sailor Moon')">
                        <span class="material-symbols-outlined"><img class="logo" alt="shop-card" src="assets/img/shop.png" /></span>
                    </a>
                </div>
            </div>
        </section>
        <section id="liste_Manga">
            <div class="manga" data-manga-id="Sakura" data-price="7.29">
                <img class="size-image" alt="Sakura" src="assets/pics/Shojo/bg_sakura.jpg" />
                <p class="description"><a>Sakura, une fillette de 10 ans, se trouve investie d'une mission très spéciale: retrouver et capturer des cartes magiques. Créées par un puissant sorcier, ces Clow Cards se matérialisent sous la forme de créatures maléfiques.</a></p>
                <div class="button-shop">
                    <a href="index.php?page=shop" onclick="addToCart('Sakura')">
                        <span class="material-symbols-outlined"><img class="logo" alt="shop-card" src="assets/img/shop.png" /></span>
                    </a>
                </div>
            </div>
        </section>
        <script src="assets/JS/shop.js" type="application/javascript" defer></script>
    </body>
</html>
