<html>
<body>

<?php
	$oldItem = $_POST['oldItem'];
	$item = $_POST['item'];
	$description = $_POST['description'];

	$db = new PDO("mysql:dbname=meshir78;host=localhost", "meshir78", "rmesh0484278");
	$rows = $db->exec("UPDATE `Menu` SET `Item`='$item', `Description`='$description' WHERE `Item`='$oldItem'");
	
	header("Location:http://webdev.cs.uwosh.edu/students/meshir78/HotDogCharlies/menuAdmin.php");
?>
</body>
</html>
