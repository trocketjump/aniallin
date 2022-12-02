<?php
require __DIR__ . "/../" . 'app/database/connect.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){ //вносит пользователя в бд user
    $username = trim($_POST['username']);
    $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
    $birthday = trim($_POST['birthday']);
    $email = trim($_POST['email']);

    $sql = "INSERT user (username, password, birthday, email) VALUE ('$username', '$password', 
    '$birthday', '$email')";

    $quary = $connection->prepare($sql); // PDO method
    $quary->execute();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
</head>
<body>
<p>Success</p>
<a href="../index.php">Go to main page</a>
</body>
</html>
