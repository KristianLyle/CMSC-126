<!-- v2.1 -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="custom.css">
	<script type="text/javascript" src="main.js"></script>
</head>
<body onload="time_now()">
	<div id="bannerContainer"> 
		<img id="banner" src="Images/banner.png" title="Website Banner" alt="Website Banner">
		<img id="bannerSub" src="Images/bannerSub.png" title="A Look Through Pre-Colonial Philippines" alt="A Look Through Pre-Colonial Philippines">

		<div id="sub-banner">
		<!-- <input type="text" placeholder="Search" id="search"> -->
<div class="navigation">
		 
		    <!-- <img id="drpIcon" src="Images/vector.png"> -->
		
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

	<div class="form">
		<form action="locateUser.php" method="get">
			<label class="label" for="username">Username</label><br>
			<input type="text" class="inputField" name="username" required><br>

			<label class="label" for="password">Password</label><br>
			<input type="password" class="inputField" name="password" required><br>
			<?php
			session_start();

			// Check if an error message is set in the session
			if (isset($_SESSION['error'])) {
				echo "<p class='pop'>" . $_SESSION['error'] . "</p>";
				unset($_SESSION['error']); // Clear the error message
			}
			?>

			<button class="button" type="sumbit">Login</button><br>
			<a id="query" class="navBar" href="signup.php">Don’t have an account? Create one</a>
		</form>
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