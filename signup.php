<!-- v2.1 -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign-up</title>
	<link rel="stylesheet" type="text/css" href="custom.css">
	<script type="text/javascript" src="main.js"></script>
	
</head>
<body onload="time_now()">
	<div id="bannerContainer"> 
		<img id="banner" src="Images/banner.png" title="Website Banner" alt="Website Banner">
		<img id="bannerSub" src="Images/bannerSub.png" title="A Look Through Pre-Colonial Philippines" alt="A Look Through Pre-Colonial Philippines">

		<div id="sub-banner">
		<input type="text" placeholder="Search" id="search">
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
	<form class="form" action="addUser.php" method="get">
		<label class="label" for="username">Username</label><br>
		<input type="text" id="username" class="inputField" name="username" required><br>

		<label class="label" for="password">Password</label><br>
		<input type="text" id="password" class="inputField" name="password" required><br>
		<p class="pop" id="note"></p>

		<label class="label" for="repassword">Re-Enter Password</label><br>
		<input type="text" id="repassword" class="inputField" name="repassword" required><br>
		<p class="pop" id="warning"></p>
		<?php
		session_start();

		// Check if an error message is set in the session
		if (isset($_SESSION['error'])) {
			echo "<p class='pop'>" . $_SESSION['error'] . "</p>";
			unset($_SESSION['error']); // Clear the error message
		}
		?>

		<button class="button" type="submit">Sign Up</button><br>
	</form>
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
