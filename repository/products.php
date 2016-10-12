<?php
function getProductsByCategory($pdo, $id){
    $product = $pdo->query('SELECT * FROM `products` WHERE `category_id` ='.$id);
    $productArray = $product->fetchAll();
    return $productArray;
}