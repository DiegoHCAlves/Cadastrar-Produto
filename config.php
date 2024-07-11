<?php

$host       = "localhost";
$port       = "3306";
$username   = "root";
$password   = "root";
$dbname     = "produto";
$dsn        = "mysql:host=$host;port=$port;dbname=$dbname";
$options    = array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);

define("dsn", $dsn);
define("username", $username);
define("password", $password);
define("options", $options); 