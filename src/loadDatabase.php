<?php 
//  A script for loading the data from the database into usable Javacsript global variable "data"
//　establish connection
include 'dbconfig.php';

$query = "select * from $tablename";

$dataResult = $dbConn->query($query)->fetch_all();
$columnsResult = $dbConn->query("SHOW COLUMNS FROM $tablename");

while($row = $columnsResult->fetch_assoc()){
    $columns[] = $row['Field'];
}

$data = json_encode($dataResult);
$columns = json_encode($columns);
?>