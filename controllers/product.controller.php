<?php
if ($action == 'product' && $idRout){
    $product = getProductById($pdo ,$idRout);
    view('product', $product);
}