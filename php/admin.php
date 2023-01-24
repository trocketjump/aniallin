<?php

//require_once __DIR__ . '/../database/connect.php';
require_once __DIR__ . '/../database/functions_table.php';

$username = $_POST['username'];
$password = $_POST['password'];
setcookie('admin', $username, time() + 3600 * 24, "/");
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = selectAll('admin', ['username' => $username, 'password' => $password]);
    foreach ($data as $key => $value) {
        if ($value['username'] === $username && $value['password'] === $password) {
            echo 'welcome';
        } else {

        }
    }
}