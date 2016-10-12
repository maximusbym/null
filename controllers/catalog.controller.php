<?php
if ($action =='catalog' && $idRout){

    $product = getProductsByCategory($pdo ,$idRout);

    view('category',$product);
}
elseif( $action == 'catalog' ) {

    $category =  getCategories($pdo);
    view('catalog', $category);
}

