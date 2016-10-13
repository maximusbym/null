<?php
function getCategories($pdo){
    $categories = $pdo->query('SELECT * FROM `categories`');
    $categoriesArray = $categories->fetchAll();
    return $categoriesArray;
}