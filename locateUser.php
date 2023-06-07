<?php

include 'serverConn.php';

$username = $_GET["username"]; 
$password = $_GET["password"]; 


$sql = "SELECT * FROM `userInfo` WHERE '$username' = 'user_name` AND '$password' = `user_password`";
        
$result = $conn -> query($sql);

if ($result->num_rows > 0){ 
    header("Location:Home.php");
    echo "success";
}else{
echo "Error: ".$sql . "<br/>" . $conn -> error ;
}

$conn->close();
?>