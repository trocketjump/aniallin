<?php
include_once __DIR__ . "/../" . 'database/functions_table.php';
/*Проверяет форму регистрации и формирует массив с данными пользователя*/
$isSubmit = false;
$errormsg = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = trim($_POST['username']);
    $birthday = trim($_POST['birthday']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $repeat_password = trim($_POST['repeat-password']);

    if($username === '' || $password === '' || $birthday === '' || $email === ''){
        $errormsg = "A field is empty";
    }
    elseif(searchTable('user', $email)){
        $errormsg = "$email is already exist";
    }
    elseif (mb_strlen($username, 'UTF-8') > 16 || mb_strlen($username, 'UTF-8') < 2){
        $errormsg = "Name must be from 2 to 16 symbols";
/*    }elseif (!preg_match('[a-zA-Z]', $username)){
        $errormsg = "Name must contain only symbols";*/
    }
    elseif (mb_strlen($password, 'UTF-8') < 4 || mb_strlen($password, 'UTF-8') > 50){
        $errormsg = "Password must be from 4 to 50 symbols";
    }
    elseif ($password !== $repeat_password){
        $errormsg = "Passwords do not match";
    }
    else{
        //var_dump("12515555555555555555555555555555555555555555555555555555555555555555555346743\/n2362233333333333333333333333333333333623");die();
        $isSubmit = true;
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $user_data = [
            'username' => $username,
            'password' => $hash_password,
            'birthday' => $birthday,
            'email'    => $email
        ];
    }
}
else{
    $username = '';
    $birthday = '';
    $email = '';
}