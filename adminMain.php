<html>
<body>

<?php
	$mission = $_POST['mission'];
	//$tmp_dat[] = "'".mysql_real_escape_string($mission)."'";
    $mission = mysql_real_escape_string(trim($mission));
	//$mission = str_replace("\r", "<br>", $mission);
	$db = new PDO("mysql:dbname=meshir78;host=localhost", "meshir78", "rmesh0484278");
	
	$rows = $db->exec("UPDATE `websiteInfo` SET `mission`='$mission'");
	
	header("Location:http://webdev.cs.uwosh.edu/students/meshir78/HotDogCharlies/mainAdmin.php");
?>
</body>
</html>
