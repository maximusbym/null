<?php
//$_SESSION['cart'] = [];
if( !$_SESSION['cart'] )
    $_SESSION['cart'] = [];
//unset($_SESSION['cart']);
//var_dump($_SESSION['cart']);
define( "MESSAGE_PATH", 'database/info.txt');

ini_set('display_errors',1);
error_reporting(E_ALL);

$config_ini = parse_ini_file('Config.ini');