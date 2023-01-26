<?php

require_once __DIR__ . '/../app/database/functions_table.php';


//if (isset($_POST['username'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    echo $username . $password;
    setcookie('admin', $username, time() + 3600 * 24, "/");
    $data = selectAll('admin', ['username' => $username, 'password' => $password]);
    foreach ($data as $key => $value) {
        echo $value['username'] . $value['password'];
        if ($value['username'] === $username && $value['password'] === $password) {
            setcookie('pass', $password, time() + 3600 * 24, "/");
            header('Location: admin_menu.php');
            echo "a";
        }else{
            echo "wrong log or pass";
        }
    }
//}