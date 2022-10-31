<?php
require __DIR__ . "/../" . 'app/database/connect.php';

$data = [$_POST['username'], $_POST['password'], $_POST['birthday'], $_POST['email']];

$sql = "INSERT user (username,password, birthday, email) VALUE ('$data[0]', '$data[1]', 
'$data[2]', '$data[3]')";

$quary = $connection->prepare($sql); // PDO method
$quary->execute();