<?php
include("serverConn.php");

# user info table creation
$sql = "CREATE TABLE userInfo (
        user_id INT(6) UNSIGNED AUTO_INCREMENT,
        user_name VARCHAR(30) NOT NULL,
        user_password VARCHAR(50) NOT NULL,
        user_email VARCHAR(50),
        PRIMARY KEY (user_id)
        )";

if ($conn -> query($sql) === TRUE) {
    echo nl2br("\nDatabase table created successfully!");
} else {
    echo nl2br("\nError creating table: " . $conn -> error);
}

# category table creation
$sql = "CREATE TABLE category (
        cat_id INT(6) UNSIGNED AUTO_INCREMENT,
        cat_name VARCHAR(100) NOT NULL,
        PRIMARY KEY (cat_id)
        )";

if ($conn -> query($sql) === TRUE) {
    echo nl2br("\nDatabase table created successfully!");
} else {
    echo nl2br("\nError creating table: " . $conn -> error);
}

# content table creation
$sql = "CREATE TABLE content (
    cont_id INT(6) UNSIGNED AUTO_INCREMENT,
    cont_name VARCHAR(100) NOT NULL,
    cont_text VARCHAR(100000) NOT NULL,
    cat_id INT(6) UNSIGNED NOT NULL,
    PRIMARY KEY (cont_id),
    FOREIGN KEY (cat_id) REFERENCES category(cat_id)
    )";

if ($conn -> query($sql) === TRUE) {
echo nl2br("\nDatabase table created successfully!");
} else {
echo nl2br("\nError creating table: " . $conn -> error);
}

// terminating connection to server for security
$conn -> close(); 
include("addInitialDataToTables.php");
?>