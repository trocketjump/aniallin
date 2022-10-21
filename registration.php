<?php
$username = $_POST['username'];
$birthday = $_POST['birthday'];
$email = $_POST['email'];
$dbname = "registrationdb";

$servername = "localhost";
$usernamedb = "root";
$password = "";

$connection = new PDO("mysql:host=localhost;dbname=registrationdb", $usernamedb, $password);


$sql = "INSERT registration (username, birthday, email) VALUE ('$username', '$birthday', '$email')";

$connection->exec($sql);