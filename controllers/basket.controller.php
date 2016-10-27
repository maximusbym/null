<?php
if ($action == 'add-product-to-cart'){

    $productId = $_POST['id'];
    if ($productId){
        if (isset($_SESSION['cart'][$productId])){
            $_SESSION['cart'][$productId]++;
        }
        else {
            $_SESSION['cart'][$productId] = 1;
        }
    }

    echo json_encode( ['amount'=> count($_SESSION['cart'])] );
}

if ($action =='basket'){
    $deletedId = isset($_GET['delete']) ? $_GET['delete'] : null;
    if ($deletedId) {
        foreach ($_SESSION['cart'] as $key => $value){
            if ($value == $deletedId){
                unset($_SESSION['cart'][$key]);
                break;
            }
        }
    }
    $arrProducts = null;
//    foreach ($_SESSION['cart'] as $value) {
//        $arrProducts[] = getProductById($pdo, $value);
//    }
//    ar
    $arrProducts = getProductsByIds($pdo,array_keys($_SESSION['cart']));

    view('basket',$arrProducts);
}
