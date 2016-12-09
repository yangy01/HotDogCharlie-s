<html>
<body>

<?php
	$username = $_POST['username'];
	$password = $_POST['password'];

	$db = new PDO("mysql:dbname=meshir78;host=localhost", "meshir78", "rmesh0484278");
	$rows = $db->query("SELECT `username`, `password` FROM `HotDogUsers`");
	
	$loginValid = false;
	foreach ($rows as $row) {
		if ((strcmp($username,$row['username']) == 0) && (strcmp($password,$row['password']) == 0)) {
			session_start();
			$_SESSION['name'] = $username;
			header("Location:http://webdev.cs.uwosh.edu/students/meshir78/HotDogCharlies/mainAdmin.php");
			$loginValid = true;
		}
	}
	if ($loginValid == false) {
	    header("Location:http://webdev.cs.uwosh.edu/students/meshir78/HotDogCharlies/main.html");
	}
?>
</body>
</html>