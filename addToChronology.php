<?php
include("serverConn.php");

$contentName = array("Prehistoric Period", "Early Historic Period", "Classical Period", "Late Historic Period");
$contentText = array("The prehistoric period of the Philippines, which spans from around 250,000 BCE to 900 CE, was a time of significant human development and cultural growth. During this era, the earliest human settlements in the Philippines emerged, including those of the Tabon Man, the Callao Man, and the Angono Petroglyphs.
Throughout the prehistoric period, various cultures and civilizations thrived in different regions of the archipelago. These cultures can be categorized into the Paleolithic, Neolithic, and Metal Age, each marked by distinct technological advancements and societal developments.
The Paleolithic era, which began around 250,000 BCE and lasted until around 10,000 BCE, was characterized by the use of stone tools and the emergence of hunter-gatherer societies. During this time, early humans in the Philippines were primarily nomadic, relying on hunting, fishing, and gathering for subsistence.
The Neolithic era, which began around 10,000 BCE and lasted until around 2,000 BCE, marked a significant shift in human development. During this period, agriculture was introduced to the Philippines, and communities began to settle in one place, leading to the emergence of complex societies and the development of new technologies.
The Metal Age, which began around 2,000 BCE and lasted until around 900 CE, was marked by the widespread use of metal tools and the emergence of more sophisticated trade networks. This period saw the rise of various powerful polities, including the Laguna Copperplate Inscription, which provides evidence of a thriving maritime trading network in the Philippines.
Overall, the prehistoric period of the Philippines was a crucial time in human history, marked by significant advancements in technology, societal development, and cultural growth.", "The early historic period of the Philippines, which spans from around 900 CE to 1300 CE, marked a significant turning point in the country's history. During this era, the emergence of writing and trade became increasingly prevalent in the Philippines, as evidenced by the Laguna Copperplate Inscription.
The prehistoric period of the Philippines, which spans from around 250,000 BCE to 900 CE, was a time of significant human development and cultural growth. During this era, the earliest human settlements in the Philippines emerged, including those of the Tabon Man, the Callao Man, and the Angono Petroglyphs.
Throughout the prehistoric period, various cultures and civilizations thrived in different regions of the archipelago. These cultures can be categorized into the Paleolithic, Neolithic, and Metal Age, each marked by distinct technological advancements and societal developments.
The Paleolithic era, which began around 250,000 BCE and lasted until around 10,000 BCE, was characterized by the use of stone tools and the emergence of hunter-gatherer societies. During this time, early humans in the Philippines were primarily nomadic, relying on hunting, fishing, and gathering for subsistence.
The Neolithic era, which began around 10,000 BCE and lasted until around 2,000 BCE, marked a significant shift in human development. During this period, agriculture was introduced to the Philippines, and communities began to settle in one place, leading to the emergence of complex societies and the development of new technologies.
The Metal Age, which began around 2,000 BCE and lasted until around 900 CE, was marked by the widespread use of metal tools and the emergence of more sophisticated trade networks. This period saw the rise of various powerful polities, including the Laguna Copperplate Inscription, which provides evidence of a thriving maritime trading network in the Philippines.
Overall, the prehistoric period of the Philippines was a crucial time in human history, marked by significant advancements in technology, societal development, and cultural growth.", "The classical period of the Philippines, which spans from around 1300 CE to 1500 CE, was a time of significant political, economic, social, and cultural development. During this era, various polities and kingdoms rose and fell in the precolonial Philippines, including Cebu, Butuan, Sulu, Maguindanao, Lanao, among others.
The prehistoric period of the Philippines, which spans from around 250,000 BCE to 900 CE, was a time of significant human development and cultural growth. During this era, the earliest human settlements in the Philippines emerged, including those of the Tabon Man, the Callao Man, and the Angono Petroglyphs.
Throughout the prehistoric period, various cultures and civilizations thrived in different regions of the archipelago. These cultures can be categorized into the Paleolithic, Neolithic, and Metal Age, each marked by distinct technological advancements and societal developments.
The Paleolithic era, which began around 250,000 BCE and lasted until around 10,000 BCE, was characterized by the use of stone tools and the emergence of hunter-gatherer societies. During this time, early humans in the Philippines were primarily nomadic, relying on hunting, fishing, and gathering for subsistence.
The Neolithic era, which began around 10,000 BCE and lasted until around 2,000 BCE, marked a significant shift in human development. During this period, agriculture was introduced to the Philippines, and communities began to settle in one place, leading to the emergence of complex societies and the development of new technologies.
The Metal Age, which began around 2,000 BCE and lasted until around 900 CE, was marked by the widespread use of metal tools and the emergence of more sophisticated trade networks. This period saw the rise of various powerful polities, including the Laguna Copperplate Inscription, which provides evidence of a thriving maritime trading network in the Philippines.
Overall, the prehistoric period of the Philippines was a crucial time in human history, marked by significant advancements in technology, societal development, and cultural growth.", "The late historic period of the Philippines, which spans from around 1500 CE to 1565 CE, was a time of significant changes such as the expansion of Islam in the region, which led to the establishment of Muslim sultanates in the southern Philippines.
The prehistoric period of the Philippines, which spans from around 250,000 BCE to 900 CE, was a time of significant human development and cultural growth. During this era, the earliest human settlements in the Philippines emerged, including those of the Tabon Man, the Callao Man, and the Angono Petroglyphs.
Throughout the prehistoric period, various cultures and civilizations thrived in different regions of the archipelago. These cultures can be categorized into the Paleolithic, Neolithic, and Metal Age, each marked by distinct technological advancements and societal developments.
The Paleolithic era, which began around 250,000 BCE and lasted until around 10,000 BCE, was characterized by the use of stone tools and the emergence of hunter-gatherer societies. During this time, early humans in the Philippines were primarily nomadic, relying on hunting, fishing, and gathering for subsistence.
The Neolithic era, which began around 10,000 BCE and lasted until around 2,000 BCE, marked a significant shift in human development. During this period, agriculture was introduced to the Philippines, and communities began to settle in one place, leading to the emergence of complex societies and the development of new technologies.
The Metal Age, which began around 2,000 BCE and lasted until around 900 CE, was marked by the widespread use of metal tools and the emergence of more sophisticated trade networks. This period saw the rise of various powerful polities, including the Laguna Copperplate Inscription, which provides evidence of a thriving maritime trading network in the Philippines.
Overall, the prehistoric period of the Philippines was a crucial time in human history, marked by significant advancements in technology, societal development, and cultural growth.");

for ($i = 0; $i < 4; $i++) {
    $contentNameEscaped = mysqli_real_escape_string($conn, $contentName[$i]);
    $contentTextEscaped = mysqli_real_escape_string($conn, $contentText[$i]);

    $sql = "INSERT INTO content (
            cont_name,
            cont_text,
            cat_id
        ) 
            VALUES (
            '$contentNameEscaped',
            '$contentTextEscaped',
            2
        )";

    if ($conn -> query($sql) === TRUE) {
        echo nl2br("\nCHRONOLOGY Data inserted successfully!");
    } else {
        echo nl2br("\nError inserting data: " . $conn -> error);
    }
}

?>