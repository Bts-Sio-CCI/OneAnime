<?php

require_once 'model/DB.php';
require_once 'model/User.php';
require_once 'model/Category.php';


if ((isset($_SESSION['userID']) && ($_SESSION['userID'] == 1))) {
    $categories = listCategories();

    if (isset($_POST['categ-select'])) {

        $users = getUsersByCategories($_POST['categ-select']);
    } else {
        $users = getUsers();
    }


} else {

    header("Location: index.php?page=accueil ");

}








require_once 'view/memberlist.php';