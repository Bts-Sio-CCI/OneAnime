<?php
function listCategories(){
    global $pdo;

    $stmt = $pdo->prepare("SELECT * FROM catégorie");
    $stmt->execute(); 
    $cats = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $cats;

}
