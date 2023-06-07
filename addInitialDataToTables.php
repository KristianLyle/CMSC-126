<?php

include("serverConn.php");


# adding Initial data to the category table of the database
$categoryName = array("Visayans Before Spanish Colonization", "Chronology", "Trade and Commerce", "Spirituality", "Geography", "Ethnicity", "Culture");

for ($i = 0; $i < 7; $i++) {
    $sql = "INSERT INTO category (
            cat_name
        ) 
            VALUES (
            '$categoryName[$i]'
        )";

    if ($conn -> query($sql) === TRUE) {
        echo nl2br("\nCATEGORY Data inserted successfully!");
    } else {
        echo nl2br("\nError inserting data: " . $conn -> error);
    }
}

# adding Initial data to content table with with connection to their respective category
# for CHRONOLOGY...
include("addToChronology.php");


include("addToTradeAndCommerce.php");
include("addToSpirituality.php");
include("addToGeography.php");
include("addToEthnicity.php");
include("addToCulture.php");

$conn -> close();
?>