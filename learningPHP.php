<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hellodb";

//connection creation
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully <br>";
}

// //create database "helloDB"
// //AN: interestingly the name became "hellodb" so yeah 
// $sql ="CREATE DATABASE helloDB";
// if($conn->query($sql) === TRUE) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }
// This is, naturally, not something you want to run again and again,
// leaving it commented for posterity and learning during revision

// //sql create table 
// $sql = "CREATE TABLE MyPeeps (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     handle VARCHAR(30) NOT NULL,
//     nickname VARCHAR(30),
//     luckynumber INT(6) UNSIGNED
//     )";
// if($conn->query($sql) === TRUE) {
//     echo "Table MyPeeps created successfully";
// } else {
//     echo "Error creating table. " . $conn->error;
// }
// This is, naturally, not something you want to run again and again,
// leaving it commented for posterity and learning during revision

//finally, insert data into a table in a database
$sql = "INSERT INTO MyPeeps (handle, nickname, luckynumber)
VALUES ('John', 'the doe', 21)";

if($conn->query($sql) === TRUE) {
    $lastID = $conn->insert_id;
    echo "New record ID" . $lastID . " created successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>