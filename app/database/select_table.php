<?php
require __DIR__ . '/connect.php';

function select_all_info($dbNane) :array {
    global $connection;

    $sql = "SELECT * FROM $dbNane";
    $query = $connection->prepare($sql);
    $query->execute();

    $errorInfo = $query->errorInfo();
    if($errorInfo[0] != PDO::ERR_NONE){
        echo $errorInfo[2];
        exit();
    }

    return $query->fetchAll();
}
