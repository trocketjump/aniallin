<?php
$driver = 'mysql';
$servername = "localhost";
$username = 'root';
$password = '';
$db_name = 'aniallin';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

try{
    $connection = new PDO(
        "$driver:host=$servername;dbname=$db_name", $username, $password, $options
    );
}catch (PDOException $i){
    die("Connection error");
}
