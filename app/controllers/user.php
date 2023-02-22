<?php
include_once __DIR__ . "/../" . 'database/functions_table.php';

$errormsg = '';

/*Проверяет форму регистрации и формирует массив с данными пользователя*/
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['registration-button'])){
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
    }
    elseif (mb_strlen($password, 'UTF-8') < 4 || mb_strlen($password, 'UTF-8') > 50){
        $errormsg = "Password must be from 4 to 50 symbols";
    }
    elseif ($password !== $repeat_password){
        $errormsg = "Passwords do not match";
    }
    else{
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $user_data = [
            'username' => $username,
            'password' => $hash_password,
            'birthday' => $birthday,
            'email'    => $email
        ];
        insert('user', ['username', 'password', 'birthday', 'email'], $user_data );
        userAuth($user_data);
    }
}
else{
    $username = '';
    $birthday = '';
    $email = '';
}

/*Check for authorization*/
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['authorization-button'])){
    $login = trim($_POST['username']);
    $password = trim($_POST['password']);

    $data = selectAll('user');
    foreach ($data as $key => $value){
        if($value['username'] == $login && password_verify($password, $value['password'])){
            $user = [
              'username' => $value['username'],
              'email' => $value['email']
            ];
            userAuth($user);
        }else{
            $errormsg="Wrong login or password";
        }
    }
}



/*user functions*/
function userAuth($user){
    setcookie('username', $user['username'], time() + 3600 * 24, "/");
    setcookie('email', $user['email'], time() + 3600 * 24, "/");
    header('location: http://localhost/aniallin/user_profile.php');
}