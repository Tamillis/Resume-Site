<?php
// a general file that sets up a database connection, exposing a $dbConn variable
//Please note that this is XAMPP data that, obviously, doesn't contain the live server's info, as that is breach of security
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "surveydb";
$tablename = "surveytable";

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

//a helper array for this database table
$dndclasses = array("Barbarian", "Bard", "Cleric", "Druid", "Fighter", "Paladin", "Monk", "Ranger", "Rogue", "Sorcerer", "Wizard", "Warlock");

//check if $tablename exists and make it if not
//generate the sql for a boolean column for each dndclass option
$dndclassSql ="";
foreach($dndclasses as $class) {
    $dndclassSql .= ", $class BOOLEAN";
}

$sql = "CREATE TABLE IF NOT EXISTS $tablename (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        handle VARCHAR(30),
        country VARCHAR(60),
        age INT(6),
        gender VARCHAR(20)
        $dndclassSql)";

$dbConn->query($sql);