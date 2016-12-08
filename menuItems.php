<html>
<body>

<?php
	$oldItem = $_POST['oldItem'];
	$item = $_POST['item'];
	$description = $_POST['description'];

	$db = new PDO("mysql:dbname=meshir78;host=localhost", "meshir78", "rmesh0484278");

	if (strcmp($oldItem, "") != 0 && strcmp($item, "") != 0) {
		$rows = $db->exec("UPDATE `Menu` SET `Item`='$item', `Description`='$description' WHERE `Item`='$oldItem'");
	}
	elseif (strcmp($oldItem, "") == 0 && strcmp($item, "") != 0) {
		$rows = $db->exec("INSERT INTO `Menu`(`Item`, `Description`) VALUES ('$item','$description')");
	}
	elseif (strcmp($oldItem, "") != 0 && strcmp($item, "") == 0) {
		$rows = $db->exec("DELETE FROM `Menu` WHERE `Item`='$oldItem'");
	}
	
	
	header("Location:http://webdev.cs.uwosh.edu/students/meshir78/HotDogCharlies/menuAdmin.php");
?>
</body>
</html>
