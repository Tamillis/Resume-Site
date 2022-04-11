<?php
//A handler for when POST data is sent from the survey page's form

//first check if POST is empty otherwise return out
if (empty($_POST)) return;

//Load dbConn connection config
include "src/surveyTableConfig.php";

//extracting and processing the POST data into more usable php variables
$handle = clean_input($_POST["handle"]);    //as this is a raw text field it needs to be made safe vs CSR attacks (although the front end should also prevent non alphabetical characters anyway)
$country = $_POST["country"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$classesChosen = $_POST["class"];

function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

//insert data into a table in a database. Variables declared to make it easier to follow
$values = "'$handle', '$country', '$age', '$gender'";
$classValues = "";
$columns = "handle, country, age, gender";
$classColumns = "";

foreach($dndclasses as $class) {
    //check if any of the chosen classes match the current class being evaluated
    $found = false;
    foreach($classesChosen as $classChosen) {
        if($classChosen === $class) {
            $classValues .=",'1'";
            $found = true;
        }
    }
    if(!$found) $classValues .= ",'0'";

    $classColumns .= ", $class";
}

//concat
$values .= $classValues;
$columns .= $classColumns;

$sql = "INSERT INTO $tablename ($columns) VALUES ($values)";

$dbConn->query($sql);

$dbConn->close();

//redirect back to the landing page page
header('Location: ./index.php');
?>