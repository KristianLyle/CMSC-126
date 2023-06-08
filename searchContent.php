<?php

include 'serverConn.php';

$searchTerm = $_GET["searchTerm"];

// Perform your database query with the search term
$sql = "SELECT * FROM content WHERE cont_name = '$searchTerm'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Content found, process the results
    $searchResults = array();

    while ($row = $result->fetch_assoc()) {
        // Access the content information
        // ... do something with the content data

        // Add the row data to the search results array
        $searchResults[] = $row;
    }

    // Encode the search results as a URL parameter
    $searchResultsParam = urlencode(json_encode($searchResults));

    // Redirect to the search result page with the search results data
    header("Location: searchResult.php?searchTerm=" . urlencode($searchTerm) . "&searchResults=" . $searchResultsParam);
    exit();
} else {
    // No content found with the specified content name
    header("Location: searchResult.php?searchTerm=" . urlencode($searchTerm));
}

$conn->close();
?>
