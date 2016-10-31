<?php
$routs = [
    'main',
    'catalog',
    'users',
    'products',
    'autocomplete'
];
$action = null;
$subAction = null;
$idRout = null;

if( $_SERVER['REQUEST_URI'] != '/admin/' ) {
    $url =  parse_url($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);

    $urlArray = explode('/',$url['path']);
    $urlArray = array_filter($urlArray);
    $action = $urlArray[2];

    if( isset($urlArray[3]) ) {
        if(is_numeric($urlArray[3])){
            $idRout = $urlArray[3];
        }
        else $subAction = $urlArray[3];
    }

    if( !in_array( $action, $routs ) ) {
        $action = null;
        $subAction = null;
    }

}
else {
    $action = 'main';
}
