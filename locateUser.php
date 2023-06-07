<!-- v2.0 -->
<?php
include 'serverConn.php';

$username = $_GET["username"]; 
$password = $_GET["password"]; 

$sql = "SELECT * FROM `userInfo` WHERE `user_name` = '$username' AND `user_password` = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) { 
    header("Location: Home.php");
    echo "success";
} else {
    echo "Error: Invalid username or password.";
}

$conn->close();
?>
