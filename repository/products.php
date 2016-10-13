<?php
function getProductsByCategory($pdo, $id){
    $products = $pdo->query('SELECT * FROM `products` WHERE `category_id` ='.$id);
    $productsArray = $products->fetchAll();
    return $productsArray;
}
function getProductById($pdo, $id){
    $product = $pdo->query('SELECT * FROM `products` WHERE `id` ='.$id);
    $productArray = $product->fetchAll();
    return $productArray;
}