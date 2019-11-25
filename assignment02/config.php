<?php
define('APP_ROOT_DIR', 'c:\xampp\htdocs\assignment02');

//setting the database constants
define('DB_USER', 'root');
define('DB_NAME','vlrms');
define('DB_PASS', '');
define('DB_HOST', 'localhost');

$conMan= mysqli_connect (DB_HOST, DB_USER,DB_PASS,DB_NAME);

if(!$conMan)
{
    die('Cannot connect to server.');
}