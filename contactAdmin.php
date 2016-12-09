<?php
        session_start();
        if (!isset($_SESSION['name'])) {
            header("Location:http://webdev.cs.uwosh.edu/students/meshir78/HotDogCharlies/contact.php");
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
    <title>Hot Dog Charlie's</title>
</head>
<body>
<div>

<h2>Contact Us</h2>
<hr>

<p>
<nav>
  <ul>
    <li><a class="active" href="mainAdmin.php">Home</a></li>
    <li><a href="aboutAdmin.php">About Us</a></li>
    <li><a href="menuAdmin.php">Menu</a></li>
    <li><a href="caterAdmin.php">Catering</a></li>
    <li><a href="galleryAdmin.php">Gallery</a></li>
	<li><a href="https://fooddudesdelivery.com/oshkosh/hotdogcharlies?zenid=fafb5ebcdf5be725af6b679f993b6577">Food Dudes Delivery</a></li>
  </ul>
</nav>
</p>
<p class="hotdog">
    <img src="Hotdog.SVG" alt="dog" style="left: 0px; top: 25%;position:fixed;float:left;width: 20%;height: 50%;">
    <img src="Hotdog.SVG" alt="dog" style="right: 0px; top: 25%;position:fixed;float:right;width: 20%;height: 50%;">
</p>
<hr>
<img src="Katie.jpg" alt="kate" style="width:528px;height:504px;">

<?php
		$db = new PDO("mysql:dbname=meshir78;host=localhost", "meshir78", "rmesh0484278");
		
		$rows = $db->query("SELECT `hours` FROM `websiteInfo`");
		foreach($rows as $row){
            $data = $row['hours'];
            $data = str_replace("<br>", "\r", $data);
?>
			<form action="adminContact.php" method="post">
			
			<div>
				<textarea name="hours" rows="10" cols="30"><?=$data?></textarea><br><br>
			</div>
			
			<input type="submit" />
			</form>
			
<?php
		}
?>

<p class="left">
<?=$row['hours']?><br><br>
	
	E-mail me if you have any questions:<br>
	charliefoos@gmail.com<br><br>
	
	You can also check my Facebook page:<br>
	<a href="https://www.facebook.com/pages/HotDogCharlies/247261358685872">HotDogCharlie's</a><br><br>
	
	Order: <br>
	By phone: 920-230-DOGS (3647)<br>
	Also feel free to order from Food Dudes Delivery too!! 
	<a href="https://fooddudesdelivery.com/oshkosh/hotdogcharlies?zenid=fafb5ebcdf5be725af6b679f993b6577">Click Here!!</a>
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