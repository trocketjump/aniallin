<?php
require __DIR__ . '/../connect.php';

$sql = "CREATE TABLE post(
    ID int NOT NULL AUTO_INCREMENT,
    post_title VARCHAR(200) NOT NULL, 
    post_img TINYTEXT, 
    post_year TINYINT,
    post_description TEXT,
    adding_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (ID)
)";


$query = $connection->prepare($sql);
$query->execute();

$errorInfo = $query->errorInfo();
if($errorInfo[0] != PDO::ERR_NONE){
    echo $errorInfo[2];
    exit();
}else{
    echo "table created success";
}