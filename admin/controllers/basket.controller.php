<?php
if ($action == 'add-product-to-cart'){
    $productId = $_POST['id'];
    foreach ($_SESSION['cart'] as $id => $count){
        if ($id == $productId){
            $_SESSION['cart'][$productId]++;
        }
    }
    $_SESSION['cart'][] = $productId;

    echo json_encode( [ 'amount'=> count($_SESSION['cart']) ] );
}

if ($action =='basket'){
    var_dump($_SESSION['cart']);
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

    $arrProducts[] = getProductsByIds($pdo,$_SESSION['cart'] );
    view('basket',$arrProducts);
}
