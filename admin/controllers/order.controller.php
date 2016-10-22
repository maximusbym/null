
<?php
if ($action == 'order'){
    $session_cart = $_SESSION['cart'] ? $_SESSION['cart'] : null;
    $arrData;

    if ($session_cart){
        foreach ($session_cart as $value) {
            $arrData[] = getProductById($pdo, $value);
        }
    } else $arrData = null;

    if (isset($_SESSION['id'])){
        $user = getUserInfo($pdo,$_SESSION['id']);
        $arrData['user'] = $user;
        $arrData['loginCheck'] = 'login';
    }
//    var_dump($arrData);

    view('order',$arrData);

}