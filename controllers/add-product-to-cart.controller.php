<?php
if ($action == 'add-product-to-cart'){
    $productId = $_POST['id'];
////var_dump($productId);
////    $count =
//    $_SESSION['cart'][] = [$productId];
////    $_SESSION['cart'] = $productId;
// var_dump($_SESSION['cart']);
    $_SESSION['cart'][$i++] = $productId;
//    $i = 1;
//    $_SESSION['cart'][$i++] = [$productId];
   // var_dump($_SESSION['cart']);
//    echo count($_SESSION['cart']);
    echo json_encode([ 'amount'=> count($_SESSION['cart']) ]);
//    echo json_encode([ 'amount'=> count($_SESSION['cart']) ]);

}