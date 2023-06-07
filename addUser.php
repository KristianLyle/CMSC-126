<?php

include 'serverConn.php';

$username = $_GET["username"]; 
$password = $_GET["password"]; 


$sql = "INSERT INTO `userInfo` (`user_name`, `user_password`) 
        VALUES ('$username', '$password');"; 
$result = $conn -> query($sql);

if($result == TRUE){ 

    echo "success";
   
    header("Location:login.php");//added semicolon here
}else{
echo "Error: ".$sql . "<br/>" . $conn -> error ;
}

$conn->close();
?>