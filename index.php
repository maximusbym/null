<?php

include "config.php";
include "user_check.php";
// Constants

define( "MESSAGE_PATH", 'database/info.txt');
//define("FILE_TXT_PATH", 'database/form2db.txt');
// Function helpers
include "helpers.php";
// routing for site
include "routing.php";
// business logic
include "controller.php";


