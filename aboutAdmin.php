<?php
        session_start();
        if (!isset($_SESSION['name'])) {
            header("Location:http://webdev.cs.uwosh.edu/students/meshir78/HotDogCharlies/about.php");
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

<h2>About Us</h2>

<div class="logout">
	<form action="logout.php" method="post">
		<button class="button log">logout</button>
	</form>
</div><br><br>

<p>
<nav>
  <ul>
    <li><a  class="active" href="mainAdmin.php">Home</a></li>
    <li><a href="menuAdmin.php">Menu</a></li>
    <li><a href="caterAdmin.php">Catering</a></li>
    <li><a href="galleryAdmin.php">Gallery</a></li>
    <li><a href="contactAdmin.php">Contact Us</a></li>
    <li><a href="https://fooddudesdelivery.com/oshkosh/hotdogcharlies?zenid=fafb5ebcdf5be725af6b679f993b6577">Food Dudes Delivery</a></li>
  </ul>
</nav>
</p>
<p class="hotdog">
    <img src="Hotdog.SVG" alt=Weiner Man" style="left: 0px; top: 25%;position:fixed;float:left;width: 20%;height: 50%;">
    <img src="Hotdog.SVG" alt="Weiner Man" style="right: 0px; top: 25%;position:fixed;float:right;width: 20%;height: 50%;">
</p>


<?php
        $db = new PDO("mysql:dbname=meshir78;host=localhost", "meshir78", "rmesh0484278");
        
        $rows = $db->query("SELECT `about` FROM `websiteInfo`");
        foreach($rows as $row){
            $about = $row['about'];        
            $about = str_replace("<br>", "\r", $about);
?>
            <form action="adminAboutUs.php" method="post" class="submit">
            
            <div>
                <textarea name="about" rows="20" cols="50"><?=$about?></textarea><br><br>
            </div>
            
            <button class="button sub">Submit</button>
            </form>
            
<?php
        }
?>

<p class="left">
     <img src="foods.jpg" alt="food" style="width: 40%;height: 70%;"><br>
    <?=$about?><br><br>
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