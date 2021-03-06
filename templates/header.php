<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/templates/css/bootstrap.css">
    <link rel="stylesheet" href="/templates/css/jquery-ui.css">
    <link rel="stylesheet" href="/templates/css/mystyle.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <title>title</title>
</head>
<body>
<div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Main page</a>
        </div>
        <div class="collapse navbar-collapse" id="responsive-menu">
            <ul class="nav navbar-nav">
                <li><a href="/">General</a></li>
                <li><a href="/catalog">Catalog</a></li>
                <li><a href="/registration">Registration</a></li>
                <li><a href="/login">Log in</a></li>
                <li><a href="/basket">Basket</a></li>
                <li><a href="/logout">Log out</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="cart container">
    Count products in basket:
<?php if (count($_SESSION['cart']) > 0){
//    echo count($_SESSION['cart']);
    $countProducts = 0;
    foreach ($_SESSION['cart'] as $key => $value){
        $countProducts += $value;
    }
    echo $countProducts;
} else echo 0;
?>
</div>
<script src="/templates/js/jquery-3.1.1.js"></script>
<script src="/templates/js/bootstrap.js"></script>
<script src="/templates/js/jquery-ui.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>



