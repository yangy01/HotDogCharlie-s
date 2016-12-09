<?php
        session_start();
        if (!isset($_SESSION['name'])) {
            header("Location:http://webdev.cs.uwosh.edu/students/meshir78/HotDogCharlies/main.html");
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="styles.css" type="text/css" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta name="description" content="Web Page Resume">
    <meta name="keywords" content="HTML">
    <meta name="author" content="">
    <title>HotDogCharlie's</title>
</head>

<body>

<header>
    <h1 class="strokeme">HotDogCharlie's</h1><br>
    <h3 class="saying">"Home of the World Famous Bacon Sauce"</h3><br>
	<form action="logout.php" method="post">
	
	<input type="submit" value="logout" />
	</form>
</header>
<div>
<img src="logo.png" alt="logo">
<hr>

<p>
<nav>

  <ul>
    <li><a class="active" href="aboutAdmin.php">About Us</a></li>
    <li><a href="menuAdmin.php">Menu</a></li>
    <li><a href="caterAdmin.php">Catering</a></li>
    <li><a href="galleryAdmin.php">Gallery</a></li>
    <li><a href="contactAdmin.php">Contact Us</a></li>
    <li><a href="https://fooddudesdelivery.com/oshkosh/hotdogcharlies?zenid=fafb5ebcdf5be725af6b679f993b6577">Food Dudes Delivery</a></li>
  </ul>
</nav>
</p>
<p class="hotdog">
    <img src="Hotdog.SVG" alt="dog" style="left: 0px; top: 25%;position:fixed;float:left;width: 20%;height: 50%;">
    <img src="Hotdog.SVG" alt="dog" style="right: 0px; top: 25%;position:fixed;float:right;width: 20%;height: 50%;">
</p>
<hr>

<p class="left">
    <b>At Hot Dog Charlie's</b> we believe in only using the finest quality products in our hot dogs
	and sauces.  Customer service with a smile to brighten your day and a hot dog in every tummy :)
</p>


<footer>
	<p class="footerLeft">
		Disclaimer: This site is under development by UW-Oshkosh students as a prototype for
	the organization Hot Dog Charlie's. Nothing on the site should be construed in any
	way as being officially connected with or representative of Hot Dog Charlie's.
	</p>

	<p class="right">
	<a href="http://validator.w3.org/check/referer"  STYLE="text-decoration: none">Validate Me</a>
	</p>
</footer>
</div>
</body>


</html>
