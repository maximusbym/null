<?php

include "controllers/guest.controller.php";
include "controllers/main.controller.php";
if ($action == 'localhost/getMessages.json'){
    header('Content-Type: application/json');
    echo json_encode( 'data' => $messages );
}

