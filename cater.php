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
<p class="hotdog">
    <img src="Hotdog.SVG" alt="dog" style="left: 0px; top: 25%;position:fixed;float:left;width: 20%;height: 50%;">
    <img src="Hotdog.SVG" alt="dog" style="right: 0px; top: 25%;position:fixed;float:right;width: 20%;height: 50%;">
</p>
<body>
<div>

<h2>Event Catering</h2>
<hr>

<p>
<nav>
  <ul>
    <li><a class="active" href="main.php">Home</a></li>
    <li><a href="about.php">About Us</a></li>
    <li><a href="menu.php">Menu</a></li>
    <li><a href="gallery.php">Gallery</a></li>
    <li><a href="contact.php">Contact Us</a></li>
    <li><a href="https://fooddudesdelivery.com/oshkosh/hotdogcharlies?zenid=fafb5ebcdf5be725af6b679f993b6577">Food Dudes Delivery</a></li>
  </ul>
</nav>
</p>
<hr>
<?php
        $db = new PDO("mysql:dbname=meshir78;host=localhost", "meshir78", "rmesh0484278");
        
        $rows = $db->query("SELECT `cater` FROM `websiteInfo`");
        foreach($rows as $row){
            $cater = $row['cater'];        
            $cater = str_replace("<br>", "\r", $cater);
        }
?>

<img src="pic4Cater.jpg" alt="cater" style="width:604px;height:328px;">

<h1 class="headers">Want Hot Dog Charlie's to cater your next event?</h1>

<p> 
    <?=$cater?><br><br>
</p>

<div class="button4Cater">
  <form action="contact.html">
    <button class="button buttonCater">Contact Chuck!</button>
  </form>
</div>

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