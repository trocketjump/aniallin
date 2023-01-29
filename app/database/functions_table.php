<?php
require __DIR__ . '/connect.php';

//no idea what is it
function searchTable($table_name, $parameter) :bool { //Проверка наличия в таблице мейла
    global $connection;
    $sql = "SELECT email FROM $table_name";

    $quary = $connection->prepare($sql); // PDO method
    $quary->execute();

    $array =  $quary->fetchAll();

    foreach ($array as $key=>$value){
        foreach ($value as $key1=>$value1){
            if($parameter === $value1){
                return true;
                die();
            }
        }
    }
    return false;
}

//function for insert data into table
function insert($table_name, $column_name = [], $column_value = []): void
{
    global $connection;
    $sql = "INSERT INTO $table_name (";

    $i = 1;
    foreach ($column_name as $value){
        if($i < count($column_name)) {
            $sql .= $value . ", ";
            $i++;
        }else{
            $sql .= $value;
        }
    }

    $sql .= ") VALUES (";

    $i = 1;
    foreach ($column_value as $value){
        if($i < count($column_value)) {
            $sql .= "'" . $value . "'" . ", ";
            $i++;
        }else{
            $sql .= "'" . $value . "'";
        }
    }

    $sql .= ")";

    $quary = $connection->prepare($sql); // PDO method
    $quary->execute();
}

//select data from a table
function selectAll($table_name, $parameters = []) :array {
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

    //dbCheckError($quary);

    return $quary->fetchAll();
}

function countRow($table_name) :int {
    global $connection;
    $sql = "SELECT COUNT(*) FROM $table_name";

    $quary = $connection->prepare($sql); // PDO method
    $quary->execute();

    return $quary->fetchColumn();
}