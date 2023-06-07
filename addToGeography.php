<?php
include('serverConn.php');

$contentName = array("Physical Geography","Political Geography", "Cultural Geography");
$contentText = array("The Philippines is an archipelagic country located in Southeast Asia, consisting of over 7,000 islands with a total land area of approximately 300,000 square kilometers. The country is bounded by the Philippine Sea to the east, the South China Sea to the west, and the Celebes Sea to the south.",
                    "In precolonial Philippines, the country was divided into numerous small kingdoms, sultanates, polities, and barangays, each with its own unique political structure and system of governance. These entities were organized along ethnic and linguistic lines and had varying degrees of autonomy and political influence.",
                    "Precolonial Philippines was home to a diverse array of cultural regions and groups, each with its own unique ethnic, linguistic, religious, and artistic traditions. These regions and groups were distributed across the archipelago, with some located on the larger islands of Luzon, Visayas, and Mindanao, while others were found on smaller islands such as Palawan.");

for ($i = 0; $i < 3; $i++) {
    $sql = "INSERT INTO content (
            cont_name,
            cont_text,
            cat_id
        ) 
            VALUES (
            '$contentName[$i]',
            '$contentText[$i]',
            5
        )";

    if ($conn -> query($sql) === TRUE) {
        echo nl2br("\nGEOGRAPHY Data inserted successfully!");
    } else {
        echo nl2br("\nError inserting data: " . $conn -> error);
    }
}

?>