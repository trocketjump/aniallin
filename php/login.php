<?php

include __DIR__ . "/../" . 'app/database/select_table.php';
include __DIR__ . "/../" . 'app/database/connect.php';

$login = $_POST['username'];
$password = $_POST['password'];
setcookie('username', $login, time() + 3600 * 24, "/");
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $data = select_all_info('user');
    $log = false;
    $pass = false;
    foreach ($data as $key => $value){
        if($value['username'] == $login && $value['password'] == $password){
            $log = true;
            $email = $value['email'];
        }else{
            $pass = true;
        }
    }
    if($log && $pass){
        $_SESSION['username'] = $login;
        $_SESSION['email'] = $email;
    }else{
        echo "wrong log or pass";
    }
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
