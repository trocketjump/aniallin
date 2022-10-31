<?php
require __DIR__ . '/connect.php';

function select_all_info($dbName) :array {
    global $connection;

    $sql = "SELECT * FROM $dbName";
    $query = $connection->prepare($sql);
    $query->execute();

    $errorInfo = $query->errorInfo();
    if($errorInfo[0] != PDO::ERR_NONE){
        echo $errorInfo[2];
        exit();
    }

    return $query->fetchAll();
}

function select_single_info($tableName, $id) :array{
    global $connection;

    $sql = "SELECT * FROM $tableName WHERE ID = $id";
    $query = $connection->prepare($sql);
    $query->execute();

    $errorInfo = $query->errorInfo();
    if($errorInfo[0] != PDO::ERR_NONE){
        echo $errorInfo[2];
        exit();
    }

    return $query->fetch();
}