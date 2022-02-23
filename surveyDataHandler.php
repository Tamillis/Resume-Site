<?php
//A handler for when POST data is sent from the survey page&s form

//first check if POST is empty otherwise return out
if (empty($_POST)) return;

//Please note that this is XAMPP data that, obviously, doesn't contain the live server's info, as that is breach of security
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "surveydb";
$tablename = "surveytable";

//a helper array
$dndclasses = array("Barbarian", "Bard", "Cleric", "Druid", "Fighter", "Paladin", "Monk", "Ranger", "Rogue", "Sorcerer", "Wizard", "Warlock");

//extracting and processing the POST data into more usable php variables
$handle = test_input($_POST["handle"]);
$country = $_POST["country"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$classesChosen = $_POST["class"];

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

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

// echo $sql . "<br>";

$dbConn->query($sql);

//finally, insert data into a table in a database. I'm aware php variables dont need to be declared buts its easier to follow this way
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

// echo $sql;

$dbConn->query($sql);

$dbConn->close();
?>