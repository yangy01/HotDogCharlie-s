<html>
<body>

<?php
	$sunday = $_POST['sunday'];
	$monday = $_POST['monday'];
	$tuesday = $_POST['tuesday'];
	$wednesday = $_POST['wednesday'];
	$thursday = $_POST['thursday'];
	$friday = $_POST['friday'];
	$saturday = $_POST['saturday'];

	$db = new PDO("mysql:dbname=meshir78;host=localhost", "meshir78", "rmesh0484278");
	
	$rows = $db->exec("UPDATE `Specials` SET `Sunday`='$sunday', `Monday`='$monday', `Tuesday`='$tuesday', `Wednesday`='$wednesday', `Thursday`='$thursday', `Friday`='$friday', `Saturday`='$saturday'");
	
	header("Location:http://webdev.cs.uwosh.edu/students/meshir78/HotDogCharlies/menuAdmin.php");
?>
</body>
</html>
