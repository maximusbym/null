<?php
if ($action == 'add-product-to-cart'){
    $productId = $_POST['id'];
    $_SESSION['cart'][] = $productId;
    echo json_encode( [ 'amount'=> count($_SESSION['cart']) ] );
}

if ($action =='basket'){

    if (isset($idRout)){
        foreach ($_SESSION['cart'] as $key => $value){
            if ($value == $idRout){
                unset($_SESSION['cart'][$key]);
                break;
            }
        }
    }
    $arrProducts;
    foreach ($_SESSION['cart'] as $value) {
        $arrProducts[] = getProductById($pdo, $value);
    }
    view('basket',$arrProducts);
}