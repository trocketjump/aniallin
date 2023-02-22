<?php

require_once __DIR__ . '/../app/database/functions_table.php';


//if (isset($_POST['username'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    setcookie('admin', $username, time() + 3600 * 24, "/");
    $data = selectAll('admin', ['username' => $username, 'password' => $password]);
    foreach ($data as $key => $value) {
        if ($value['username'] === $username && password_verify($password, $value['password'])) {
            setcookie('pass', $password, time() + 3600 * 24, "/");
            header('Location: admin_menu.php');
        }else{
            echo "wrong log or pass";
        }
    }
//}