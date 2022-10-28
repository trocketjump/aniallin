<?php
$servername = "localhost";
$username = "root";
$password = "";

$connection = new mysqli($servername, $username, $password);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "CREATE DATABASE postdb";

if ($connection->query($sql)) {
    echo "Database postdb created successfully";
} else {
    echo "Error " . $connection->error;
}

//Создание дб с помощью mysqli (методный способ)