<?php
if ($action == 'add-product-to-cart'){
    $productId = $_POST['id'];

    $_SESSION['cart'][] = $productId;

    echo json_encode([ 'amount'=> count($_SESSION['cart']) ]);

}