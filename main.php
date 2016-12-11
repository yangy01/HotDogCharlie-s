<!DOCTYPE html>

<html lang="en">
<head>
    <link href="styles.css" type="text/css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8">
    <meta name="description" content="Web Page Resume">
    <meta name="keywords" content="HTML">
    <meta name="author" content="">
    <title>HotDogCharlie's</title>
</head>


<body>

<header>
    <img src="Banner.SVG" alt="HotDogCharlies">
    <h3 class="saying">"Home of the World Famous Bacon Sauce"</h3><br>
	<form class="login" action="login.php" method="post">
		
			User Name: <input type="text" name="username"  /><br>
			Password: <input type="password" name="password"  /><br>
			
		
	<button class="button lo">login</button>
	</form>
</header>

<p class="hotdog">
    <img src="Hotdog.SVG" alt="Weiner Man" style="left: 0px; top: 25%;position:fixed;float:left;width: 20%;height: 50%;">
    <img src="Hotdog.SVG" alt="Weiner Man" style="right: 0px; top: 25%;position:fixed;float:right;width: 20%;height: 50%;">
</p>
<div>


<nav>

  <ul>
    <li><a href="about.php">About Us</a></li>
    <li><a href="menu.php">Menu</a>  </li>
    <li><a href="cater.php">Catering</a> </li>
    <li><a href="gallery.php">Gallery</a></li>
    <li><a href="contact.php">Contact Us</a>  </li>
    <li><a href="https://fooddudesdelivery.com/oshkosh/hotdogcharlies?zenid=fafb5ebcdf5be725af6b679f993b6577">Food Dudes Delivery</a></li>
  </ul>
</nav>

<?php
        $db = new PDO("mysql:dbname=meshir78;host=localhost", "meshir78", "rmesh0484278");
        
        $rows = $db->query("SELECT `mission` FROM `websiteInfo`");
        foreach($rows as $row){
            $data = $row['mission'];
            
            
        }
?>

<p id="left" style="padding: 1em">
  
    <img src="Group.JPG" alt="group" style="width: 50%;height: 50%;">
    <br><br><?=$data?><br>
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

