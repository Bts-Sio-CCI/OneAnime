<?php
function listCategories()
{
    $cnx = connect_bd('utilisateur');

    $stmt = $cnx->prepare("SELECT * FROM catégorie");
    $stmt->execute();
    $cats = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $cats;

}
