<?php
require __DIR__ . '/connect.php';

$sql = "CREATE TABLE user(
    ID int NOT NULL AUTO_INCREMENT,
    username VARCHAR(200) NOT NULL,
    password  VARCHAR(50),
    birthday DATE, 
    email VARCHAR(255),
    adding_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (ID)
)";

$quary = $connection->prepare($sql);
$quary->execute();

$errorInfo = $quary->errorInfo();
if($errorInfo[0] != PDO::ERR_NONE){
    echo $errorInfo[2];
    exit();
}else{
    echo "table created success";
}