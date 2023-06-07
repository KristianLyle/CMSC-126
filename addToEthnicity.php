<?php
include('serverConn.php');

$contentName = array("Austronesian","Negrito","Sama Bajau");
$contentText = array("The Austronesian peoples are a group of diverse populations who speak languages belonging to the Austronesian language family. They are one of the largest language families in the world, with over 1,200 different languages spoken across Southeast Asia, Oceania, and Madagascar. In the Philippines, the majority of precolonial Filipinos belong to the Austronesian language family and share common cultural and genetic traits.",
                    "The Negrito peoples are a minority group of precolonial Filipinos who are believed to be the descendants of the earliest human settlers in the Philippines. They are characterized by their distinct physical features, such as short stature, curly hair, and dark skin, and their unique languages and cultural traditions.",
                    "The Sama-Bajau peoples are another minority group of precolonial Filipinos who are known for their seafaring and nomadic lifestyle. They are considered to be some of the most skilled boatmen and navigators in Southeast Asia, and have a rich cultural heritage that is closely tied to the sea.");

for ($i = 0; $i < 3; $i++) {
    $sql = "INSERT INTO content (
            cont_name,
            cont_text,
            cat_id
        ) 
            VALUES (
            '$contentName[$i]',
            '$contentText[$i]',
            6
        )";

    if ($conn -> query($sql) === TRUE) {
        echo nl2br("\nETHNICITY Data inserted successfully!");
    } else {
        echo nl2br("\nError inserting data: " . $conn -> error);
    }
}

?>