<?php
function listCategories()
{
    $cnx = connect_bd('onemanga');

    $stmt = $cnx->prepare("SELECT * FROM catégoriser");
    $stmt->execute();
    $cats = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $cats;

}
