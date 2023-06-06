<?php

include("serverConn.php");

$in_value = $_REQUEST["input_value"];
$sql = "SELECT cont_text 
        FROM content 
        WHERE cont_id = '$in_value'
        ";
$result = $conn -> query($sql);
 

if ($result -> num_rows > 0) {
    while($row = $result -> fetch_assoc()) {
        echo($row["cont_text"]);

    }
    
    $result -> free_result();
    
} else {
    echo nl2br("\nError selecting data: " . $conn -> error);
}

$conn -> close();
?>