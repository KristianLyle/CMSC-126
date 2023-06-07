<!-- v2.1 -->
<?php
session_start();
include 'serverConn.php';

$username = $_GET["username"];
$password = $_GET["password"];
$repassword = $_GET["repassword"];

if ($password != $repassword) {
    $_SESSION['error'] = "Error: Passwords do not match.";
    header("Location: signup.php");
    exit();
}

// Check if username already exists
$checkUsernameQuery = "SELECT * FROM `userInfo` WHERE `user_name` = '$username'";
$result = $conn->query($checkUsernameQuery);

if ($result->num_rows > 0) {
    $_SESSION['error'] = "Error: Username already exists.";
    header("Location: signup.php");
    exit();
}

$sql = "INSERT INTO `userInfo` (`user_name`, `user_password`) 
        VALUES ('$username', '$password');";
$insertResult = $conn->query($sql);

if ($insertResult === TRUE) {
    header("Location: login.php");
    exit();
} else {
    $_SESSION['error'] = "Error: " . $sql . "<br/>" . $conn->error;
    header("Location: signup.php");
    exit();
}

$conn->close();
?>
