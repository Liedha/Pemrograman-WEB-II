<?php
$host = 'localhost';
$db = 'modul5'; 
$user = 'root'; 
$pass = ''; 

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
?>
