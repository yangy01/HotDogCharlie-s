<?php
        session_start();
        if (!isset($_SESSION['name'])) {
            header("Location:http://webdev.cs.uwosh.edu/students/meshir78/HotDogCharlies/main.php");
        }
?>

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
    <img src="Banner.SVG" alt="HotDogCharlie">
    <h3 class="saying">"Home of the World Famous Bacon Sauce"</h3><br>

<?php
	$db = new PDO("mysql:dbname=meshir78;host=localhost", "meshir78", "rmesh0484278");

	$rows = $db->query("SELECT `password` FROM `HotDogUsers`");
?>
    
    <form action="changePass.php" method="post">
	   Old Password: <input type="text" name="oldpass" value="" onkeyup="checkPassword(this.value)"/><br>
	   New Password: <input type="text" name="newpass" value="" /><br>
    <input type="submit" value="Change Password" />
	</form>
	<p> <span id="confirm"></span></p>

	<script>
	function checkPassword(str) {
	  var xhttp;
	  if (str.length == 0) { 
	    document.getElementById("confirm").innerHTML = "";
	    return;
	  }
	  xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
<?php
		foreach($rows as $row){
?>
	    if (str == <?=$row['password']?>) {
	      document.getElementById("confirm").innerHTML = "password match";
	    }
<?php
	}
?>
	  };
	  xhttp.send();   
	}
	</script>
    
    <div class="logout">
           <form action="logout.php" method="post">
	           <button class="button log">logout</button>
	       </form>
    </div><br><br>
</header>
<div>

<nav>

  <ul>
    <li><a href="aboutAdmin.php">About Us</a></li>
    <li><a href="menuAdmin.php">Menu</a></li>
    <li><a href="caterAdmin.php">Catering</a></li>
    <li><a href="galleryAdmin.php">Gallery</a></li>
    <li><a href="contactAdmin.php">Contact Us</a></li>
    <li><a href="https://fooddudesdelivery.com/oshkosh/hotdogcharlies?zenid=fafb5ebcdf5be725af6b679f993b6577">Food Dudes Delivery</a></li>
  </ul>
</nav>

<p class="hotdog">
    <img src="Hotdog.SVG" alt=Weiner Man" style="left: 0px; top: 25%;position:fixed;float:left;width: 20%;height: 50%;">
    <img src="Hotdog.SVG" alt=Weiner Man" style="right: 0px; top: 25%;position:fixed;float:right;width: 20%;height: 50%;">
</p>

<?php	
		$rows = $db->query("SELECT `mission` FROM `websiteInfo`");
		foreach($rows as $row){
            $data = $row['mission'];
            
?>
			<form action="adminMain.php" method="post" class="submit">
			
			<div>
				<textarea name="mission" rows="20" cols="50"><?=$data?></textarea><br><br>
			</div>
			
			<button class="button sub">Submit</button>
			</form>
			
<?php
		}
?>

<p class="left" style="padding: 1em">
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

