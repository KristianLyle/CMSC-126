<?php

include 'serverConn.php';

$username = $_GET["username"]; 
$password = $_GET["password"]; 


$sql = "INSERT INTO `userInfo` (`user_name`, `user_password`) 
        VALUES ('$username', '$password');"; 
$result = $conn -> query($sql);

if($result == TRUE){ 
    header("Location:login.php");
    echo "success";
}else{
echo "Error: ".$sql . "<br/>" . $conn -> error ;
}

$conn->close();
?>