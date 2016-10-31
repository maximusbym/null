<?php
if ($action == null){
    //header();
    include "templates/404.view.php";
}
include_once "controllers/main.controller.php";
include_once "controllers/users.controller.php";
include_once "controllers/catalog.controller.php";
include_once "controllers/products.controller.php";
include_once "controllers/autocomplete.controller.php";

