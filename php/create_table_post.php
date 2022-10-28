<?php
$servername = "localhost";
$username = "root";
$password = "";

$connection = new mysqli($servername, $username, $password, "postdb");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "CREATE TABLE post(
    ID int NOT NULL AUTO_INCREMENT,
    post_title VARCHAR(200) NOT NULL, 
    post_img TINYTEXT, 
    post_description TEXT,
    PRIMARY KEY (ID)
)";

if ($connection->query($sql)) {
    echo "Table post created successfully";
} else {
    echo "Error " . $connection->error;
}

//Создание таблицы с помощью mysqli (методный способ)











$connection->close();