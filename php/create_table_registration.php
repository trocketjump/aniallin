<?php
$servername = "localhost";
$username = "root";
$password = "";

$connection = new mysqli($servername, $username, $password, "registrationDb");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "CREATE TABLE registration(
    ID int NOT NULL AUTO_INCREMENT,
    username VARCHAR(200) NOT NULL, 
    birthday DATE, 
    email VARCHAR(255),
    adding_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (ID)
)";

if ($connection->query($sql)) {
    echo "Table post created successfully";
} else {
    echo "Error " . $connection->error;
}