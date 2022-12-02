<?php
require __DIR__ . "/../" . 'app/database/connect.php';
include __DIR__ . "/../" . 'app/database/select_table.php';

$login = $_POST['username'];
$password = $_POST['password'];
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $data = select_all_info('user');
    $log = false;
    $pass = false;
    foreach ($data as $key => $value){
        if($value['username'] == $login && $value['password'] == $password){
            $log = true;
        }else{
            $pass = true;
        }
    }
    if($log && $pass){
        echo "hello";
    }else{
        echo "wrong log or pass";
    }
}