<?php
//A handler for when POST data is sent from a form page

//first check if POST is empty otherwise return out
if (empty($_POST)) return;

//Please note that this is XAMPP data that, obviously, doesn't contain the live server's info, as that is breach of security
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "surveydb";
$tablename = "surveytable";

//the data of the visitor survey is fixed, so I'm just using these hard coded variables
$handle = "";
$country = "";
$age = 0;
$gender = "";
$dndclass = array("Barbarian", "Bard", "Cleric", "Druid", "Fighter", "Paladin", "Monk", "Ranger", "Rogue", "Sorcerer", "Wizard", "Warlock");

//check database exists by and create it if it doesnt, then close this connection
$sqlConn = new mysqli($servername, $username, $password);

//check connection
if ($sqlConn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlConn->query("CREATE DATABASE IF NOT EXISTS " . $dbname);
$sqlConn->close();

//create connection to database
$dbConn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($dbConn->connect_error) {
    die("Connection failed: " . $dbConn->connect_error);
}

//check if $tablename exists and make it if not
//generate the sql for a boolean column for each dndclass option
$dndclassSql ="";
foreach($dndclass as $class) {
    $dndclassSql = "$dndclassSql, $class BOOLEAN";
}

$sql = "CREATE TABLE IF NOT EXISTS $tablename (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        handle VARCHAR(30),
        country VARCHAR(60),
        gender VARCHAR(20)
        $dndclassSql)";

// echo $sql . "<br>";

$dbConn->query($sql);

//finally, insert data into a table in a database
$values = "'" . $_POST["handle"] . "', '" . $_POST["country"] . "', " . $_POST["age"] . ", '" . $_POST["gender"] . "'";
$classValues = "";

// TODO
foreach($dndclass as $class) {
    if($_POST["class"] === $class) $classValues .= ",'1'";
    else $classValues .= ",'0'";
}

//concat
$values .= $classValues;

$sql = "INSERT INTO $tablename VALUES (" . $values . ")";

// echo $sql;

$dbConn->query($sql);

$dbConn->close();
?>