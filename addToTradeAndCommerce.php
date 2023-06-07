<?php
include('serverConn.php');

$contentName = array("Maritime Trade Networks", "Trade Relations with China", "Trade Relations with India", "Trade Relations with Arabia", "Trade Relations with Indonesia");
$contentText = array(" Precolonial Philippines was a crucial hub in the history of maritime trade networks that facilitated the exchange of goods and ideas in Southeast Asia and beyond. Filipino traders and sailors used various types of vessels, such as balangays, equipped with outriggers and sails, to navigate the vast waters surrounding the archipelago. Navigation techniques were rudimentary but effective, using stars, the sun, the moon, ocean currents, winds, and tides to guide them through the seas.
Port facilities, such as Manila, Cebu, and Butuan, were essential for the success of maritime trade networks. These ports served as centers of trade and cultural exchange, equipped with warehouses, docking areas, and other facilities that allowed ships to load and unload goods easily.
Precolonial Philippines was connected to other parts of Southeast Asia and beyond through a vast network of sea routes. Seaborne commerce facilitated the exchange of a wide range of goods, including textiles, spices, ceramics, and precious metals. Filipino sailors and traders were highly respected in the region due to the country's maritime prowess.
Today, the legacy of these trade networks can still be seen in the Philippines' cultural diversity and economic activity.","Precolonial Philippines had a long and extensive trade relationship with China, which dates back to the 10th century CE. This relationship was largely driven by the mutual desire for valuable goods and commodities that were abundant in both countries.
Precolonial Philippines was a crucial hub in the history of maritime trade networks that facilitated the exchange of goods and ideas in Southeast Asia and beyond. Filipino traders and sailors used various types of vessels, such as balangays, equipped with outriggers and sails, to navigate the vast waters surrounding the archipelago. Navigation techniques were rudimentary but effective, using stars, the sun, the moon, ocean currents, winds, and tides to guide them through the seas.
Port facilities, such as Manila, Cebu, and Butuan, were essential for the success of maritime trade networks. These ports served as centers of trade and cultural exchange, equipped with warehouses, docking areas, and other facilities that allowed ships to load and unload goods easily.
Precolonial Philippines was connected to other parts of Southeast Asia and beyond through a vast network of sea routes. Seaborne commerce facilitated the exchange of a wide range of goods, including textiles, spices, ceramics, and precious metals. Filipino sailors and traders were highly respected in the region due to the country's maritime prowess.
Today, the legacy of these trade networks can still be seen in the Philippines' cultural diversity and economic activity.", "Precolonial Philippines had a long and significant trade relationship with India, which began as early as the 9th century CE. The trade between the two countries played a crucial role in the exchange of goods, technologies, and ideas, and had a significant impact on the cultural and religious landscape of the Philippines.
Precolonial Philippines was a crucial hub in the history of maritime trade networks that facilitated the exchange of goods and ideas in Southeast Asia and beyond. Filipino traders and sailors used various types of vessels, such as balangays, equipped with outriggers and sails, to navigate the vast waters surrounding the archipelago. Navigation techniques were rudimentary but effective, using stars, the sun, the moon, ocean currents, winds, and tides to guide them through the seas.
Port facilities, such as Manila, Cebu, and Butuan, were essential for the success of maritime trade networks. These ports served as centers of trade and cultural exchange, equipped with warehouses, docking areas, and other facilities that allowed ships to load and unload goods easily.
Precolonial Philippines was connected to other parts of Southeast Asia and beyond through a vast network of sea routes. Seaborne commerce facilitated the exchange of a wide range of goods, including textiles, spices, ceramics, and precious metals. Filipino sailors and traders were highly respected in the region due to the country's maritime prowess.
Today, the legacy of these trade networks can still be seen in the Philippines' cultural diversity and economic activity.","Precolonial Philippines had trade contacts with Arabia, particularly with Muslim traders who brought with them the Islamic faith and culture. This trade relationship began in the 13th century CE and lasted until the arrival of the Spanish in the 16th century.
Precolonial Philippines had a long and significant trade relationship with India, which began as early as the 9th century CE. The trade between the two countries played a crucial role in the exchange of goods, technologies, and ideas, and had a significant impact on the cultural and religious landscape of the Philippines.
Precolonial Philippines was a crucial hub in the history of maritime trade networks that facilitated the exchange of goods and ideas in Southeast Asia and beyond. Filipino traders and sailors used various types of vessels, such as balangays, equipped with outriggers and sails, to navigate the vast waters surrounding the archipelago. Navigation techniques were rudimentary but effective, using stars, the sun, the moon, ocean currents, winds, and tides to guide them through the seas.
Port facilities, such as Manila, Cebu, and Butuan, were essential for the success of maritime trade networks. These ports served as centers of trade and cultural exchange, equipped with warehouses, docking areas, and other facilities that allowed ships to load and unload goods easily.
Precolonial Philippines was connected to other parts of Southeast Asia and beyond through a vast network of sea routes. Seaborne commerce facilitated the exchange of a wide range of goods, including textiles, spices, ceramics, and precious metals. Filipino sailors and traders were highly respected in the region due to the country's maritime prowess.
Today, the legacy of these trade networks can still be seen in the Philippines' cultural diversity and economic activity."," Precolonial Philippines and Indonesia shared similarities in geography, ethnicity, language, politics, and culture. They were archipelagos influenced by Indian and Chinese cultures, and their trade involved the exchange of products, commodities, and currencies that were crucial to their economies.
Precolonial Philippines had trade contacts with Arabia, particularly with Muslim traders who brought with them the Islamic faith and culture. This trade relationship began in the 13th century CE and lasted until the arrival of the Spanish in the 16th century.
Precolonial Philippines had a long and significant trade relationship with India, which began as early as the 9th century CE. The trade between the two countries played a crucial role in the exchange of goods, technologies, and ideas, and had a significant impact on the cultural and religious landscape of the Philippines.
Precolonial Philippines was a crucial hub in the history of maritime trade networks that facilitated the exchange of goods and ideas in Southeast Asia and beyond. Filipino traders and sailors used various types of vessels, such as balangays, equipped with outriggers and sails, to navigate the vast waters surrounding the archipelago. Navigation techniques were rudimentary but effective, using stars, the sun, the moon, ocean currents, winds, and tides to guide them through the seas.
Port facilities, such as Manila, Cebu, and Butuan, were essential for the success of maritime trade networks. These ports served as centers of trade and cultural exchange, equipped with warehouses, docking areas, and other facilities that allowed ships to load and unload goods easily.
Precolonial Philippines was connected to other parts of Southeast Asia and beyond through a vast network of sea routes. Seaborne commerce facilitated the exchange of a wide range of goods, including textiles, spices, ceramics, and precious metals. Filipino sailors and traders were highly respected in the region due to the country's maritime prowess.
Today, the legacy of these trade networks can still be seen in the Philippines' cultural diversity and economic activity.");

for ($i = 0; $i < 5; $i++){
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
            3
        )";

    if ($conn -> query($sql) === TRUE) {
        echo nl2br("\nTRADE AND COMMERCE Data inserted successfully!");
    } else {
        echo nl2br("\nError inserting data: " . $conn -> error);
    }   
}


?>