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

<h2>Menu</h2>
<hr>

<p>
<nav>
  <ul>
    <li><a class="active" href="mainAdmin.html">Home</a></li>
    <li><a href="aboutAdmin.html">About Us</a></li>
    <li><a href="caterAdmin.html">Catering</a></li>
    <li><a href="galleryAdmin.html">Gallery</a></li>
    <li><a href="contactAdmin.html">Contact Us</a></li>
	<li><a href="https://fooddudesdelivery.com/oshkosh/hotdogcharlies?zenid=fafb5ebcdf5be725af6b679f993b6577">Food Dudes Delivery</a></li>
  </ul>
</nav>
</p>
<hr>

<p>
	<ul class="menu">
<?php
		$db = new PDO("mysql:dbname=meshir78;host=localhost", "meshir78", "rmesh0484278");
		
		$rows = $db->query("SELECT `Item`, `Description` FROM `Menu`");
		foreach($rows as $row){
?>
			<form action="menuItems.php" method="post">
			
			<div>
				Old Name: <input type="text" name="oldItem" value="<?=$row['Item']?>" readonly="readonly" /><br>
				New Name: <input type="text" name="item" value="<?=$row['Item']?>" /><br>
				
				<textarea name="description" rows="10" cols="30"><?=$row['Description']?></textarea><br><br>
			</div>
			
			<input type="submit" />
			</form>
			
<?php
		}
?>
	</ul>
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