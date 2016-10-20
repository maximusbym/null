
<?php
if ($action == 'order'){
    $arrProducts;
    foreach ($_SESSION['cart'] as $value) {
        $arrProducts[] = getProductById($pdo, $value);
    }
    $check = 0;
    if (isset($_SESSION['role'])){

    }
    else echo "<a href='/login'">login."</a>";

}