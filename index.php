<?php
// start session
session_start();
// all configuration
include "config.php";
// connector for MySQL
include "database.php";
// Function helpers
include "repository.php";
// custom function
include "helpers.php";
// routing for site
include "routing.php";
// business logic
include "controller.php";


