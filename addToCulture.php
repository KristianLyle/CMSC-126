<?php
include('serverConn.php');

$contentName = array("Art","Literature","Music","Architecture","Clothing","Cuisine");
$contentText = array("Precolonial Filipino art is a rich and diverse cultural heritage that distinguished the Philippines from other cultures in Southeast Asia. This art is characterized by the use of natural materials such as bamboo, wood, and abaca fibers, as well as a deep appreciation for nature and its symbolism.",
                    "Precolonial Filipino literature is a rich and diverse cultural heritage that reflects the values, beliefs, and experiences of the indigenous peoples of the Philippines. This literature is characterized by its use of oral tradition, with stories and poems passed down through generations through spoken word.",
                    "Precolonial Filipino music is a diverse and vibrant cultural heritage that reflected the emotions, moods, and occasions of the indigenous peoples of the Philippines. This music is characterized by its use of indigenous instruments, rhythmic patterns, and vocal techniques.",
                    "Precolonial Filipino music is a diverse and vibrant cultural heritage that reflected the emotions, moods, and occasions of the indigenous peoples of the Philippines. This music is characterized by its use of indigenous instruments, rhythmic patterns, and vocal techniques.",
                    "Precolonial Filipino clothing and adornments were essential in indicating a person's status, identity, and aesthetics. The clothing was made from natural fibers such as cotton, hemp, and abaca, and was often adorned with intricate patterns and designs.",
                    "Precolonial Filipino cuisine is a reflection of the indigenous peoples' diverse geography, climate, and trade. The Philippines' islands provided an abundance of seafood and tropical fruits, while rice and root crops served as staples.");
                    
for ($i = 0; $i < 6; $i++){
    $contentNameEscaped = mysqli_real_escape_string($conn, $contentName[$i]);
    $contentTextEscaped = mysqli_real_escape_string($conn, $contentText[$i]);

    $sql = "INSERT INTO content (
            cont_name,
            cont_text,
            cat_id
        )
            VALUES(
            '$contentNameEscaped',
            '$contentTextEscaped',
            7
        )";

    if ($conn -> query($sql) === TRUE) {
        echo nl2br("\nCULTURE Data inserted successfully!");
    } else {
        echo nl2br("\nError inserting data: " . $conn -> error);
    }   
}


?>                    