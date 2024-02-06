<?php

if (!isset($_SESSION['userID'])) {
    header("Location: index.php?page=login");
    exit();
}

if (
    isset($_POST['disconnect']) &&
    $_POST['disconnect'] == 1
) {
    session_unset();
    header("Location: index.php?page=login");
}

require_once 'view/forum.php';