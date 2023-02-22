<?php

require __DIR__ . '/../connect.php';

$sql = "CREATE TABLE comment(
    ID int NOT NULL AUTO_INCREMENT,
    comment_text TEXT NOT NULL, 
    username VARCHAR(16), 
    post_title VARCHAR(200),
    adding_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (ID)
)";


$query = $connection->prepare($sql);
$query->execute();

$errorInfo = $query->errorInfo();
if ($errorInfo[0] != PDO::ERR_NONE) {
    echo $errorInfo[2];
    exit();
} else {
    echo "table comment created success";
}