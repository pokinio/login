<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'php_login_databsae';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>

