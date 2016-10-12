<?php
if ($action == null){
    //header();
    include "templates/404.view.php";
}
include "controllers/guest.controller.php";
include "controllers/postmessages.controller.php";
include "controllers/catalog.controller.php";
include "controllers/json.controller.php";
include "controllers/main.controller.php";



