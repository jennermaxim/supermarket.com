<?php
// error_reporting(0);
error_reporting(E_ALL);
ini_set('display_errors', 1);
define('DB_HOST', "localhost");
define('DB_USER', "root");
define('DB_PASS', "");
define('DB_NAME', "supermarket_db");

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME)
    or die('<font size="24px">Error Establishing Database Connection</font>');