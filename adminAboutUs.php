<html>
<body>

<?php
	$about = $_POST['about'];
	$about = str_replace("\r", "<br>", $about);
    $about = mysql_real_escape_string(trim($about));
	
	$db = new PDO("mysql:dbname=meshir78;host=localhost", "meshir78", "rmesh0484278");
	
	$rows = $db->exec("UPDATE `websiteInfo` SET `about`='$about'");
	
	header("Location:http://webdev.cs.uwosh.edu/students/meshir78/HotDogCharlies/aboutAdmin.php");
?>
</body>
</html>
