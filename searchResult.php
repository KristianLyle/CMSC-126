<!-- searchResult.php -->
<!-- v2.1 -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search Results</title>
	<link rel="stylesheet" type="text/css" href="custom.css">
	<script type="text/javascript" src="main.js"></script>
</head>
<body onload="time_now()">
	<div id="bannerContainer"> 
		<img id="banner" src="Images/banner.png" title="Website Banner" alt="Website Banner">
		<img id="bannerSub" src="Images/bannerSub.png" title="A Look Through Pre-Colonial Philippines" alt="A Look Through Pre-Colonial Philippines">

		<div id="sub-banner">
		<form action="searchContent.php" method="GET">
			<input type="text" placeholder="Search" id="search" name="searchTerm">
			<button type="submit" id="searchBtn">Search</button>
		</form>
		<div class="navigation">
		 
		    <img id="drpIcon" src="Images/vector.png">
		
			 <div class="menu">
			    <a class="opt" href="Home.html">Home</a>
			    <a class="opt" href="aboutUs.html">About Us</a>
			 </div>
		</div>
		</div>
	</div>
	
	<b>
	<p id="current-date"></p>
	</b>
	<br>
	<hr>
	
	<div id="contentContainer">
    <?php
    include 'serverConn.php';

		if (isset($_GET["searchTerm"])) {
			$searchTerm = $_GET["searchTerm"];

			// Perform your database query with the search term
			$sql = "SELECT * FROM content WHERE cont_name LIKE '%$searchTerm%'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// Content found, display the results in a table
				echo "<table>";
				echo "<tr><th>Content Name</th><th>Content Text</th></tr>";
				while ($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>" . $row["cont_name"] . "</td>";
					echo "<td>" . $row["cont_text"] . "</td>";
					echo "</tr>";
				}
				echo "</table>";
			} else {
				// No content found with the specified content name
				echo "No matching content found.";
			}
		}
	?>


	</div>

	<div id="footer">
		<p id="copyright">©2023 Project Katipunan. All rights reserved.</p>
		<div id="subfooter">
			<a href="twitter.com/home"><img id="twitter" class="share" src="Images/twitter.png" title="twitter" alt="twitter logo"></a>
			<a href="https://www.facebook.com/"><img id="facebook" class="share" src="Images/facebook.png" title="facebook" alt="facebook logo"></a>
			<a href="https://www.instagram.com/"><img id="instagram" class="share" src="Images/instagram.png" title="instagram" alt="instagram logo"></a>
		</div>
	</div>
</body>
</html>
