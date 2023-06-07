<!-- v2.0 -->
<?php
include 'serverConn.php';

$username = $_GET["username"]; 
$password = $_GET["password"]; 
$repassword = $_GET["repassword"]; 

if ($password != $repassword) {
    echo "Error: Passwords do not match.";
    exit();
}

// Check if username already exists
$checkUsernameQuery = "SELECT * FROM `userInfo` WHERE `user_name` = '$username'";
$result = $conn->query($checkUsernameQuery);

if ($result->num_rows > 0) {
    echo "Error: Username already exists.";
    exit();
}

$sql = "INSERT INTO `userInfo` (`user_name`, `user_password`) 
        VALUES ('$username', '$password');"; 
$insertResult = $conn->query($sql);

if ($insertResult === TRUE) { 
    header("Location: login.php");
    echo "success";
} else {
    echo "Error: " . $sql . "<br/>" . $conn->error;
}

$conn->close();
?>
