<?php
$routs = [
    'form2',
    'login',
    'admin',
    'guest',
    'getMessages',
    'postMessages'
];

if( $_SERVER['REQUEST_URI'] != '/' ) {

    $urlArray = explode('/', $_SERVER['REQUEST_URI']);

    $urlArray = explode('?', $urlArray[1]);

    $urlArray = array_filter($urlArray);
    $action = $urlArray[0];
    if( isset($urlArray[2]) ) {
        $subAction = $urlArray[2];
    }

    if( !in_array( $action, $routs ) ) {
        $action = null;
        $subAction = null;
    }
}
else {
    $action = 'main';
}

if( $action == 'admin' ) {
    if( $_SESSION['admin_user'] != 1 ) {
        header('location: /login');
        exit();
    }
}