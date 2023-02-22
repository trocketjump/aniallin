<?php
include_once __DIR__ . "/../" . 'database/functions_table.php';


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $login = trim($_POST['username']);
    $password = trim($_POST['password']);

    $data = selectAll('admin');
    foreach ($data as $key => $value){
        if($value['username'] === $login && $value['password'] === $password){
            $admin = $value['username'];
            $SESSION['admin'] = $admin;
            header('Location: app/adminpanel/admin_menu.php');
        }else{
            $errormsg="Wrong login or password";
        }
    }
}