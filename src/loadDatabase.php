<?php
//  A script for loading the data from the database into usable Javacsript global variable "data"
//　establish connection
include 'surveyTableConfig.php';

//select all from the config db
$query = "select * from $tablename";
$dataResult = $dbConn->query($query);

//fetch key value paired objects for each row, as the column names are needed for use in the data processing
while($row = $dataResult->fetch_object()) {
    $data[] = $row;
};

//and expose the json object of that
$data = json_encode($data);