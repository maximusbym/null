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
//
function getProductsByIds($pdo, $idArr){
    $arr = implode(",", $idArr);
    $product = $pdo->query("SELECT * FROM `products` WHERE `id` IN ({$arr})");
    $productArray = $product->fetchAll();
    var_dump($productArray);
    return $productArray;
}