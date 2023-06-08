<!-- v2.1 -->
<?php
session_start();
include 'serverConn.php';

$username = $_GET["username"]; 
$password = $_GET["password"]; 

$sql = "SELECT * FROM `userInfo` WHERE `user_name` = '$username' AND `user_password` = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) { 
    header("Location: Home.html");
} else {
    $_SESSION['error'] = "Error: Username and password do not match.";
    header("Location: login.php");
    exit();
}

$conn->close();
?>
