<?php
function getCategories($pdo){
    $categories = $pdo->query('SELECT * FROM `categories`');
    $categoriesArray = $categories->fetchAll(PDO::FETCH_ASSOC);
    return $categoriesArray;
}