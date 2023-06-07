<?php

$servername = "localhost";
$username = "root"; //default username
$password = ""; //default password
$dbname = "katipunan";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully <br/>";
?>