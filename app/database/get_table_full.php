<?php
require __DIR__ . '/connect.php';

/*function for getting all data from a table*/
function selectAll($table_name, $parameters = []){
    global $connection;
    $sql = "SELECT * FROM $table_name";

    if(!empty($parameters)){
        $i = 0;
        foreach ($parameters as $key => $value){
            if(!is_numeric($value)){
                $value = "'" . $value . "'";
            }
            if($i == 0) {
                $sql .= " WHERE $key=$value";
            }else{
                $sql .= " AND $key=$value";
            }
            $i++;
        }
    }

    $quary = $connection->prepare($sql); // PDO method
    $quary->execute();

    dbCheckError($quary);

    return $quary->fetchAll();
}
/*check request into db*/
function dbCheckError($quary){
    $errorInfo = $quary->errorInfo();
    if($errorInfo[0] != PDO::ERR_NONE){
        echo $errorInfo[2];
        exit();
    }
}
$parameters = [
    'username' => 'admin',
    'email' => 'admin@gmail.com'
];
echo "<pre>";
print_r(selectAll('user', $parameters));
echo "</pre>";