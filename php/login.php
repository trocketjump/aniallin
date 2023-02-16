<!DOCTYPE html>
<?php
include __DIR__ . "/../" . 'app/database/select_table.php';

$login = trim($_POST['username']);
$password = trim($_POST['password']);

setcookie('username', $login, time() + 3600 * 24, "/");

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $data = select_all_info('user');
    $log = false;
    $pass = false;
    $email = '';
    foreach ($data as $key => $value){
        if($value['username'] == $login && password_verify($password, $value['password'])){
            $log = true;
            $pass = true;
            $email = $value['email'];
            setcookie('email', $email, time() + 3600 * 24, "/");
        }
    }
   if($log && $pass){
       header("Location: ../index.php");
        echo <<<_END
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport"
                      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Success</title>
            </head>
            <body>
            </body>
            </html>
        _END;
    }else{
        echo "wrong log or pass" . "<br>";
        echo <<<_END
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport"
                      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Wrong</title>
            </head>
            <body>
            <a href="../index.php">Go to main page</a>
            </body>
            </html>
        _END;
    }
}


