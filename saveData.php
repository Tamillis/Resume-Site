<!-- A webpage for showing test form data-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="portfolio, resume, curriculum vitae, Peter, Bellaby, Peter Bellaby">
    <meta name="description" content="A resume and portfolio of Peter Bellaby">
    <meta name="author" content="Peter Bellaby">

    <title>Test Form</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="testForm.css">
</head>

<body>
    <section class="section">
        <p class="subtitle">You submitted the data: </p>
        <p class="main-text no-indent">
            <?php
            foreach ($_POST as $key => $value) {
                echo "Key: " . $key . ", Value: " . $value;
                echo "<br>";
            }

            ?>
        </p>
    </section>
</body>

</html>

<!-- From here a pure PHP script for storing that data in a MySQL database using mysqli -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";
$tablename = "test";

//check database exists by
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

//check if $tablename exists
$sql = "CREATE TABLE IF NOT EXISTS $tablename (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30),
        age VARCHAR(30),
        gender VARCHAR(10))";

$dbConn->query($sql);

//finally, insert data into a table in a database
$values = "'" . $_POST["userName"] . "', " . $_POST["age"] . ", '" . $_POST["gender"] . "'";
$sql = "INSERT INTO " . $tablename . " (Name, Age, Gender) VALUES (" . $values . ")";

if ($dbConn->query($sql) === TRUE) {
    $lastID = $dbConn->insert_id;
    echo "New record ID" . $lastID . " created successfully";
} else {
    echo "Error: " . $dbConn->error;
}

$dbConn->close();
?>