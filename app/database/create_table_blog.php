<?php
require __DIR__ . '/connect.php';

$sql = "CREATE TABLE blog(
    ID int NOT NULL AUTO_INCREMENT,
    blog_text TEXT,
    blog_img VARCHAR(250), 
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