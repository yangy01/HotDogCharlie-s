<?php
	    session_start();
	    if (!isset($_SESSION['name'])) {
	    	header("Location:http://webdev.cs.uwosh.edu/students/meshir78/HotDogCharlies/menu.php");
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
<header>
<img src="Banner.SVG" alt="HotDogCharlie">
</header>
<div>

<h2>Menu</h2>
<hr>

<div class="logout">
	<form action="logout.php" method="post">
		<button class="button log">logout</button>
	</form>
</div><br><br>

<nav>
  <ul>
    <li><a class="active" href="mainAdmin.php">Home</a></li>
    <li><a href="aboutAdmin.php">About Us</a></li>
    <li><a href="caterAdmin.php">Catering</a></li>
    <li><a href="galleryAdmin.php">Gallery</a></li>
    <li><a href="contactAdmin.php">Contact Us</a></li>
	<li><a href="https://fooddudesdelivery.com/oshkosh/hotdogcharlies?zenid=fafb5ebcdf5be725af6b679f993b6577">Food Dudes Delivery</a></li>
  </ul>
</nav>
<p class="hotdog">
    <img src="Hotdog.SVG" alt=Weiner Man" style="left: 0px; top: 25%;position:fixed;float:left;width: 20%;height: 50%;">
    <img src="Hotdog.SVG" alt="Weiner Man" style="right: 0px; top: 25%;position:fixed;float:right;width: 20%;height: 50%;">
</p>
<hr>

<?php
		$db = new PDO("mysql:dbname=meshir78;host=localhost", "meshir78", "rmesh0484278");
		$rows = $db->query("SELECT * FROM `Specials`");

		foreach ($rows as $row) {
?>
<form action="menuSpecials.php" method="post" class="submit">

<div>
    <textarea name="sunday" rows="10" cols="30"><?=$row['Sunday']?></textarea>
    <textarea name="monday" rows="10" cols="30"><?=$row['Monday']?></textarea>
    <textarea name="tuesday" rows="10" cols="30"><?=$row['Tuesday']?></textarea>
    <textarea name="wednesday" rows="10" cols="30"><?=$row['Wednesday']?></textarea>
    <textarea name="thursday" rows="10" cols="30"><?=$row['Thursday']?></textarea>
    <textarea name="friday" rows="10" cols="30"><?=$row['Friday']?></textarea>
    <textarea name="saturday" rows="10" cols="30"><?=$row['Saturday']?></textarea><br><br>
</div>
<button class="button sub">update specials</button>
</form>
<?php
	}
		
		$rows = $db->query("SELECT `Item`, `Description` FROM `Menu`");
		foreach($rows as $row){
?>
			<form action="menuItems.php" method="post" class="submit">
			
			<div>
				Old Name: <input type="text" name="oldItem" value="<?=$row['Item']?>" readonly="readonly" /><br>
				New Name: <input type="text" name="item" value="<?=$row['Item']?>" /><br>
				
				<textarea name="description" rows="10" cols="30"><?=$row['Description']?></textarea><br><br>
			</div>
			<button class="button sub">edit menu item</button>
			
			</form>
			
<?php
		} //<input type="submit" value="edit menu item"/>
?>

		<form action="menuItems.php" method="post" class="submit">
			
			<div>
				Old Name: <input type="text" name="oldItem" value="" readonly="readonly" /><br>
				New Name: <input type="text" name="item" value="" /><br>
				
				<textarea name="description" rows="10" cols="30"></textarea><br><br>
			</div>
			
			<button class="button sub">edit menu item</button>
			</form>



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