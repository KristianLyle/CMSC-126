<?php

// declaring and initializing variables
$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";

// establishing connection to server
$conn = new mysqli($dbHost, $dbUser, $dbPassword);

// checking if the connection is successful
if ($conn -> connect_error) {
    die("Connection failed: " . $conn -> connect_error);
}
echo("Connected successfully!");

// creating database and checking if the proccess is successful
$sql = "CREATE DATABASE katipunan";
if ($conn -> query($sql) === TRUE) {
    echo nl2br("\nDatabase created successfully!");
} else {
    echo nl2br("\nError creating database: " . $conn -> error);
}
// terminating connection to server for security
$conn -> close(); 

include("addTablesToDb.php");



?>