<?php

// declaring and initializing variables
$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "katipunan";

// establishing connection to database "someDb"
$conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

// checking if the connection is successful
if ($conn -> connect_error) {
    die("Connection failed: " . $conn -> connect_error);
}
echo("\nCONNECTED SUCCESSFULLY!");

?>