<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "course_db";

$dbConnection = new mysqli($serverName, $userName, $password, $dbName);

if ($dbConnection->connect_error) {
    die("Connection failed " . $dbConnection->connect_error);
} else {
    header('Location: ../templates/index.html');
   
}
?>