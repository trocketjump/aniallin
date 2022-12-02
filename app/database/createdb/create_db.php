<?php
$driver = 'mysql';
$servername = "localhost";
$username = "root";
$password = "";

$connection = new PDO("$driver:host=$servername", $username, $password);


$sql = "CREATE DATABASE aniallin";

if ($connection->query($sql)) {
    echo "Database aniallin created successfully";
} else {
    echo "Error ";
}