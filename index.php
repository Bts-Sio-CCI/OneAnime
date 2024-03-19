<?php
session_start();

if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        // index.php?page=accueil
        case 'accueil':
            require_once 'controller/accueil.php';
            break;
        // index.php?page=fantasy
        case 'fantasy':
            require_once 'controller/fantasy.php';
            break;

        // index.php?page=shop
        case 'shop':
            require_once 'controller/shop.php';
            break;

        // index.php?page=shonen
        case 'shonen':
            require_once 'controller/shonen.php';
            break;
        // index.php?page=shojo
        case 'shojo':
            require_once 'controller/shojo.php';
            break;
        // index.php?page=shojo
        case 'seinen':
            require_once 'controller/seinen.php';
            break;

        // index.php?page=forum
        case 'forum':
            require_once 'controller/forum.php';
            break;

        // index.php?page=isekai
        case 'isekai':
            require_once 'controller/isekai.php';
            break;

        // index.php?page=parametre
        case 'parametre':
            require_once 'controller/parametre.php';
            break;

        // index.php?page=register
        case 'register':
            require_once 'controller/register.php';
            break;

        // index.php?page=romance
        case 'romance':
            require_once 'controller/romance.php';
            break;

        // index.php?page=login
        case 'login':
            require_once 'controller/login.php';
            break;

        // index.php?page=memberlist
        case 'memberlist':
            include 'controller/memberlist.php';
            break;

    }

} else {
    header('Location: index.php?page=accueil');
}