<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OneAnime</title>
    <link rel="stylesheet" type="text/css" href="../CSS/Category/styles.css" />
    <link rel="stylesheet" type="text/css" href="/CSS/Forum/styles.css" />
    <link rel="icon" type="images/x-icon" href="/assets/logo.png" />
</head>

<body>
    <nav id="main-container">
        <div class="menu">
            <ul class="menu-content">
                <li class="onglet-titre">
                    <a href="../index.html"> <span class="material-symbols-outlined"><img class="logo" alt="home"
                                src="../assets/home.png"></span><span class="titre">OneManga</span></a>
                </li>
                <li>
                    <a href="../html/seinen.html">
                        <span class="material-symbols-outlined"><img class="logo" alt="pegi18"
                                src="../assets/480px-Moins18.svg-removebg-preview.png"></span><span>Seinen</span></a>
                </li>
                <li>
                    <a href="../html/shonen.html">
                        <span class="material-symbols-outlined"><img class="logo" alt="unnamed-removebg-preview"
                                src="../assets/unnamed-removebg-preview.png"></span><span>Shōnen</span></a>
                </li>
                <li>
                    <a href="../html/shojo.html">
                        <span class="material-symbols-outlined"><img class="logo" alt="shojo"
                                src="../assets/shojo.png"></span><span>Shōjo</span></a>
                </li>
                <li>
                    <a href="../html/isekai.html">
                        <span class="material-symbols-outlined"><img class="logo" alt="NerveGear-removebg-preview"
                                src="../assets/NerveGear-removebg-preview.png"></span><span>Isekai</span></a>
                </li>
                <li>
                    <a href="../html/romance.html">
                        <span class="material-symbols-outlined"><img class="logo" alt="romance"
                                src="../assets/romance-removebg-preview.png"></span><span>Romance</span></a>
                </li>
                <li>
                    <a href="../html/fantasy.html">
                        <span class="material-symbols-outlined"><img class="logo" alt="fantasy"
                                src="../assets/fantasy.png"></span><span>Fantasy</span></a>
                </li>
                <li class="onglet-shop">
                    <a href="../html/shop.html"> <span class="material-symbols-outlined"><img class="logo" alt="shop"
                                src="../assets/shop.png"></span><span>Shop</span></a>
                </li>
                <li class="onglet-forum">
                    <a href="../html/forum.html"> <span class="material-symbols-outlined"><img class="logo" alt="forum"
                                src="../assets/forum.png"></span><span>Forum</span></a>
                </li>
                <li class="onglet-settings">
                    <a href="../html/parametre.html"> <span class="material-symbols-outlined"><img class="logo"
                                alt="settings" src="../assets/settings.png"></span><span>Paramètres</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <?php



    ?>

    <div class="login-form">
        <form action="action_register.php" method="post">
            <h2 class="text-center">Log in</h2>
            <div class="form-group">
                <input type="text" name="login" class="form-control" placeholder="Username" required="required">
            </div>
            <div class="form-group">
                <input type="password" name="pass" class="form-control" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Log in</button>
            </div>
            <div class="clearfix">
                <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
                <a href="#" class="float-right">Forgot Password?</a>
            </div>
        </form>
        <p class="text-center"><a href="#">Create an Account</a></p>
    </div>
</body>

</html>