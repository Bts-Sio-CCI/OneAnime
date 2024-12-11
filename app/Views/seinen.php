<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OneAnime</title>
    <link rel="stylesheet" type="text/css" href="/CSS/Category/styles.css" />
    <link rel="icon" type="images/x-icon" href="/logo.png" />
</head>

<body>
    <section class="barre">
        <div class="div-search">
            <input type="text" aria-label="input-search" class="recherche" id="search-bar" />
        </div>
    </section>
    <?= view('components/navbar') ?>
    <section id="liste_Manga">
        <div class="manga" data-manga-id="Jojo" data-price="7.30">
            <img class="size-image" alt="Jojo" src="/pics/Seinen/bg_jojo.jpg" />
            <p class="description">
                <a>En Angleterre, dans les années 1880, Jonathan, fils unique de la famille aristocrate Joestar,
                    s’efforce de devenir un gentleman accompli. Son quotidien est bouleversé par l’adoption de Dio
                    Brando, un jeune homme mystérieux du même âge. Cette adoption résulte d’une vieille promesse liant
                    leurs pères respectifs : Dario a sauvé la vie de George Joestar dans le passé et lui demande, sur
                    son lit de mort, de recueillir son fils. Mais Dio est fourbe, ambitieux et sans scrupule : il fera
                    tout pour s’emparer de la fortune des Joestar et détruire la vie de Jonathan. Leur lutte fratricide
                    va les mener dans les recoins les plus sombres de la magie noire et se perpétuer de génération en
                    génération comme une malédiction.</a>
            </p>
            <div class="button-shop">
            <a href="<?= url_to('user_shop') ?>" onclick="addToCart('Jojo')">
                    <span class="material-symbols-outlined"><img class="logo" alt="shop-card"
                            src="/img/shop.png" /></span>
                </a>
            </div>
        </div>
        <div class="manga" data-manga-id="Berserk" data-price="6.99">
            <img class="size-image" alt="Berserk" src="/pics/Seinen/bg_berserk.jpg" />
            <p class="description"><a>Guts, guerrier solitaire au passé terrible, est traqué par des forces obscures et
                    terrifiantes qui ne lui laissent aucun répit. Le cœur empli de rage, il sème la mort sur son passage
                    à l’aide de sa gigantesque épée, tente de regagner sa liberté et d’accomplir sa vengeance…</a></p>
            <div class="button-shop">
            <a href="<?= url_to('user_shop') ?>" onclick="addToCart('Berserk')">
                    <span class="material-symbols-outlined"><img class="logo" alt="shop-card"
                            src="/img/shop.png" /></span>
                </a>
            </div>
        </div>
        <div class="manga" data-manga-id="Oshi no ko" data-price="7.95">
            <img class="size-image" alt="Oshi_no_ko" src="/pics/Seinen/bg_oshi_no_ko.jpg" />
            <p class="description"><a>Le docteur Gorô est obstétricien dans un hôpital de campagne. Il est loin du monde
                    de paillettes dans lequel évolue Aï Hoshino, une chanteuse au succès grandissant dont il est un fan
                    absolu. Ces deux-là vont se rencontrer dans des circonstances exceptionnelles, ce qui changera leur
                    vie à jamais !</a></p>
            <div class="button-shop">
            <a href="<?= url_to('user_shop') ?>" onclick="addToCart('Oshi no ko')">
                    <span class="material-symbols-outlined"><img class="logo" alt="shop-card"
                            src="/img/shop.png" /></span>
                </a>
            </div>
        </div>
        <div class="manga" data-manga-id="SNK" data-price="7.20">
            <img class="size-image" alt="SNK" src="/pics/Seinen/bg_snk.jpg" />
            <p class="description"><a>Dans un monde ravagé par des titans mangeurs d’homme depuis plus d’un siècle, les
                    rares survivants de l’Humanité n’ont d’autre choix pour survivre que de se barricader dans une
                    cité-forteresse. Le jeune Eren, témoin de la mort de sa mère dévorée par un titan, n’a qu’un rêve :
                    entrer dans le corps d’élite chargé de découvrir l’origine des Titans et les annihiler jusqu’au
                    dernier…</a></p>
            <div class="button-shop">
            <a href="<?= url_to('user_shop') ?>" onclick="addToCart('SNK')">
                    <span class="material-symbols-outlined"><img class="logo" alt="shop-card"
                            src="/img/shop.png" /></span>
                </a>
            </div>
        </div>
        <div class="manga" data-manga-id="Tokyo Ghoul" data-price="6.99">
            <img class="size-image" alt="Tokyo_Ghoul" src="/pics/Seinen/bg_tokyo_ghoul.jpg" />
            <p class="description"><a>Elles se fondent dans la foule pour mieux se nourrir de chair humaine. Elles
                    ressemblent aux hommes, mais leur existence est bien différente... Elles sont appelées "goules". Le
                    CCG, une organisation gouvernementale chargée d'étudier et d'éradiquer les goules, met sur pied un
                    nouveau groupe composé de sujets expérimentaux. Leur nom : les "Quinx". Dirigé par l'inspecteur
                    Haise Sasaki, ce groupe atypique se voit confier une mission tout aussi singulière. Quel destin les
                    attend dans les tréfonds de la capitale japonaise ?</a></p>
            <div class="button-shop">
            <a href="<?= url_to('user_shop') ?>" onclick="addToCart('Tokyo Ghoul')">
                    <span class="material-symbols-outlined"><img class="logo" alt="shop-card"
                            src="/img/shop.png" /></span>
                </a>
            </div>
        </div>
    </section>
    <section id="liste_Manga">
        <div class="manga" data-manga-id="Vinland Saga" data-price="7.95">
            <img class="size-image" alt="Vinland_Saga" src="/pics/Seinen/bg_vinland_saga.jpg" />
            <p class="description"><a>Depuis qu'Askeladd, un chef de guerre fourbe et sans honneur, a tué son père
                    lorsqu'il était enfant, Thorfinn le suit partout dans le but de se venger. Mais bien qu'il soit
                    devenu un guerrier redoutable, il ne parvient toujours pas à vaincre son ennemi.</a></p>
            <div class="button-shop">
            <a href="<?= url_to('user_shop') ?>" onclick="addToCart('Vinland Saga')">
                    <span class="material-symbols-outlined"><img class="logo" alt="shop-card"
                            src="/img/shop.png" /></span>
                </a>
            </div>
        </div>
        <div class="manga" data-manga-id="Vagabond" data-price="9.99">
            <img class="size-image" alt="Vagabond" src="/pics/Seinen/bg_vagabond.jpg" />
            <p class="description"><a>En 1600 a lieu la terrible bataille de Sekigahara, qui assied le pouvoir du shôgun
                    Tokugawa. Parmi les combattants, Shinmen Takezo, fils d'un grand samurai, qui est prêt à tout pour
                    survivre. Revenant à son village natal, il est rejeté par les habitants pour avoir déserté.</a></p>
            <div class="button-shop">
            <a href="<?= url_to('user_shop') ?>" onclick="addToCart('Vagabond')">
                    <span class="material-symbols-outlined"><img class="logo" alt="shop-card"
                            src="/img/shop.png" /></span>
                </a>
            </div>
        </div>
        <div class="manga" data-manga-id="Kingdom" data-price="6.95">
            <img class="size-image" alt="Kingdom" src="/pics/Seinen/bg_kingdom.jpg" />
            <p class="description"><a>Dans la période de l'ancienne Chine, Shin et Hyou sont des orphelins de guerre
                    dans le royaume de Qin. Ils rêvent un jour de pouvoir se rendre sur un champ de guerre. Un jour,
                    Hyou est amené au palais par un ministre, pris par erreur pour le roi du royaume ennemi.</a></p>
            <div class="button-shop">
            <a href="<?= url_to('user_shop') ?>" onclick="addToCart('Kingdom')">
                    <span class="material-symbols-outlined"><img class="logo" alt="shop-card"
                            src="/img/shop.png" /></span>
                </a>
            </div>
        </div>
        <div class="manga" data-manga-id="Monster" data-price="15.90">
            <img class="size-image" alt="Monster" src="/pics/Seinen/bg_monster.jpg" />
            <p class="description"><a>Par une nuit de 1986, une décision d'ordre éthique va conduire le docteur Kenzo
                    Tenma à sauver la vie d'un enfant aux dépens de celle du maire de la ville. Comment pouvait-il
                    savoir que son acte aurait de telles conséquences? Car l'enfant qu'il a sauvé, a grandi, et semble
                    être le dénommé Monster.</a></p>
            <div class="button-shop">
            <a href="<?= url_to('user_shop') ?>" onclick="addToCart('Monster')">
                    <span class="material-symbols-outlined"><img class="logo" alt="shop-card"
                            src="/img/shop.png" /></span>
                </a>
            </div>
        </div>
    </section>
    <script src="/JS/shop.js" defer></script>
</body>

</html>