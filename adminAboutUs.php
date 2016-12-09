<html>
<body>

<?php
	$hours = $_POST['hours'];
	$hours = str_replace("\r", "<br>", $hours);
	$db = new PDO("mysql:dbname=meshir78;host=localhost", "meshir78", "rmesh0484278");
	
	$rows = $db->exec("UPDATE `websiteInfo` SET `hours`='$hours'");
	
	header("Location:http://webdev.cs.uwosh.edu/students/meshir78/HotDogCharlies/contactAdmin.php");
?>
</body>
</html>
