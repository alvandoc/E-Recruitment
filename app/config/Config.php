<?php

$root = (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'];
$root .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
define('BASEURL', $root);


//Database
define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_DATABASE', 'e_recruitment');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
