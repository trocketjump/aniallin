<?php

$servername = "localhost";
$username = "root";
$password = "";

$connection = new mysqli($servername, $username, $password);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "CREATE DATABASE registrationDb";

if ($connection->query($sql)) {
    echo "Database registrationDb created successfully";
} else {
    echo "Error " . $connection->error;
}