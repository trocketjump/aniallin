<?php
$server = "localhost";
$user = "root";
$dbname = "postdb";
$password = "";

$conn = mysqli_connect($server , $user , $password, $dbname);
if(!$conn) {
    echo "Ne podkl" . "<br>";
    die("Connection failed: " . mysqli_connect_error());;
}
echo "Connected successfully";
mysqli_set_charset($conn, "utf8");

$sql= "SELECT * FROM post";
$result = mysqli_query($conn, $sql);
$array = [];
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);





mysqli_close($conn);