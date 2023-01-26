<?php
include_once __DIR__ . "/../" . 'database/functions_table.php';

/*Check admin auntification*/
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);

    $data = selectAll('admin');
    foreach ($data as $key=>$value){

    }
}