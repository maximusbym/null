<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

include "database.php";
include "config.php";

define( "MESSAGE_PATH", 'database/info.txt');
// define("FILE_TXT_PATH", 'database/form2db.txt');
// Function helpers
include "repository.php";
include "config.php";

include "helpers.php";

// routing for site
include "routing.php";
// business logic
include "controller.php";


