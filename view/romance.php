<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>OneAnime</title>
        <link rel="stylesheet" type="text/css" href="assets/CSS/Category/styles.css" />
        <link rel="icon" type="images/x-icon" href="assets/img/logo.png" />
    </head>
    <body>
        <section class="barre">
            <div class="div-search">
                <input type="search" class="recherche" id="search-bar" />
            </div>
        </section>
        <?php require_once 'view/components/navbar.html' ?>

        <section id="liste_Manga">
            <div class="manga" data-manga-id="Call of The Night" data-price="7.20">
                <img class="size-image" alt="callofthenight" src="assets/pics/Romance/bg_callofthenight.jpg" />
                <p class="description"><a>Au cours d'une promenade, Kou rencontre une étrange fille nommée Nazuna Nanakusa qui diagnostique la cause de son insomnie : malgré les changements qu'il a apportés à sa vie, il s'empêche toujours de connaître la vraie liberté.</a></p>
                <div class="button-shop">
                    <a href="index.php?page=shop" onclick="addToCart('Call of The Night')">
                        <span class="material-symbols-outlined"><img class="logo" alt="shop-card" src="assets/img/shop.png" /></span>
                    </a>
                </div>
            </div>
            <div class="manga" data-manga-id="Domestic nokanojo" data-price="7.29">
                <img class="size-image" alt="domesticnokanojo" src="assets/pics/Romance/bg_domesticnokanojo.jpg" />
                <p class="description"><a>Fou amoureux de sa professeure principale Hina, le jeune Natsuo Fuji tente désespérément d'oublier cet amour impossible. Il fait ainsi la rencontre de Rui, une jeune fille de son âge, avec qui il passe la nuit.</a></p>
                <div class="button-shop">
                    <a href="index.php?page=shop" onclick="addToCart('Domestic nokanojo')">
                        <span class="material-symbols-outlined"><img class="logo" alt="shop-card" src="assets/img/shop.png" /></span>
                    </a>
                </div>
            </div>
            <div class="manga" data-manga-id="My Dress-up Darling" data-price="7.80">
                <img class="size-image" alt="Dress-up_Darling" src="assets/pics/Romance/bg_dressupdarling.jpg" />
                <p class="description"><a>Wakana Gojo est un lycéen solitaire. Son rêve est de devenir artisan et de fabriquer les poupées traditionnelles pour le Hina Matsuri. Mais comme cette passion n'est pas très virile, il la cache et ne se fait pas remarquer. Jusqu'au jour où Marine Kitagawa, la fille la plus populaire du lycée, le voit se servir d'une machine à coudre ! Contre toute attente elle lui demande de devenir son couturier pour réaliser... des tenues de cosplay !</a></p>
                <div class="button-shop">
                    <a href="index.php?page=shop" onclick="addToCart('My Dress-up Darling')">
                        <span class="material-symbols-outlined"><img class="logo" alt="shop-card" src="assets/img/shop.png" /></span>
                    </a>
                </div>
            </div>
            <div class="manga" data-manga-id="Horimiya" data-price="7.20">
                <img class="size-image" alt="Horimiya" src="assets/pics/Romance/bg_horimiya.jpg" />
                <p class="description"><a>Bien qu'admirée à l'école pour sa gentillesse et ses prouesses académiques, Kyôko Hori est cependant différente chez elle. Avec ses parents souvent absents pour travailler, Hori doit s'occuper de son jeune frère et faire le ménage, l'empêchant ainsi de se socialiser en dehors de l'école.</a></p>
                <div class="button-shop">
                    <a href="index.php?page=shop" onclick="addToCart('Horimiya')">
                        <span class="material-symbols-outlined"><img class="logo" alt="shop-card" src="assets/img/shop.png" /></span>
                    </a>
                </div>
            </div>
            <div class="manga" data-manga-id="Love is war" data-price="7.20">
                <img class="size-image" alt="Kaguya" src="assets/pics/Romance/bg_kaguya.jpg" />
                <p class="description"><a>Deux élèves amoureux, mais aveuglés par leur fierté, cherchent chacun à pousser l'autre à se déclarer. En attendant de connaître celui qui sortira vainqueur de cette guerre psychologique, leurs échanges donnent lieu à des situations aussi drôles que jouissives.</a></p>
                <div class="button-shop">
                    <a href="index.php?page=shop" onclick="addToCart('Love is war')">
                        <span class="material-symbols-outlined"><img class="logo" alt="shop-card" src="assets/img/shop.png" /></span>
                    </a>
                </div>
            </div>
        </section>
        <section id="liste_Manga">
            <div class="manga" data-manga-id="Komi cherche ses mots" data-price="7.20">
                <img class="size-image" alt="Komi" src="assets/pics/Romance/bg_komi.jpg" />
                <p class="description"><a>Komi-san est la plus jolie fille du lycée et les personnes autour d'elle ne peuvent s'empêcher de la regarder. Presque toute l'école la voit comme une beauté froide qui n'est pas à leur portée, mais Tadano Hitohito connaît la vérité : elle est tout simplement trop timide pour communiquer avec les autres.</a></p>
                <div class="button-shop">
                    <a href="index.php?page=shop" onclick="addToCart('Komi cherche ses mots')">
                        <span class="material-symbols-outlined"><img class="logo" alt="shop-card" src="assets/img/shop.png" /></span>
                    </a>
                </div>
            </div>
            <div class="manga" data-manga-id="Silent Voice" data-price="6.95">
                <img class="size-image" alt="Silent_Voice" src="assets/pics/Romance/bg_silentvoice.jpg" />
                <p class="description"><a>Nishimiya est une élève douce mais qui elle est harcelée par Ishida, car elle est sourde. Dénoncé, le garçon est à son tour rejeté par ses camarades. Des années plus tard, il apprend la langue des signes et part à la recherche de la jeune fille.</a></p>
                <div class="button-shop">
                    <a href="index.php?page=shop" onclick="addToCart('Silent Voice')">
                        <span class="material-symbols-outlined"><img class="logo" alt="shop-card" src="assets/img/shop.png" /></span>
                    </a>
                </div>
            </div>
            <div class="manga" data-manga-id="Wotakoi" data-price="7.70">
                <img class="size-image" alt="Wotakoi" src="assets/pics/Romance/bg_wotakoi.jpg" />
                <p class="description"><a>Lorsque Narumi, une employée de bureau qui dissimule le fait qu'elle soit fan de yaoi, change de travail. Elle est réunie avec Hirotaka, un ami d'enfance séduisant et talentueux, mais accro aux jeux vidéo. Ils commencent à se fréquenter.</a></p>
                <div class="button-shop">
                    <a href="index.php?page=shop" onclick="addToCart('Wotakoi')">
                        <span class="material-symbols-outlined"><img class="logo" alt="shop-card" src="assets/img/shop.png" /></span>
                    </a>
                </div>
            </div>
        </section>
        <script src="assets/JS/shop.js" type="application/javascript" defer></script>
    </body>
</html>
