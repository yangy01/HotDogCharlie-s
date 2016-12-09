<html>
<body>

<?php
	$cater = $_POST['cater'];
	$cater = str_replace("\r", "<br>", $cater);
    $cater = mysql_real_escape_string(trim($cater));
	
	$db = new PDO("mysql:dbname=meshir78;host=localhost", "meshir78", "rmesh0484278");
	
	$rows = $db->exec("UPDATE `websiteInfo` SET `cater`='$cater'");
	
	header("Location:http://webdev.cs.uwosh.edu/students/meshir78/HotDogCharlies/caterAdmin.php");
?>
</body>
</html>
