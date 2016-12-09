<html>
	
<body>

<?php
	session_start();
	if(isset($_SESSION['name']))
		unset($_SESSION['name']);
	session_destroy();
	header("Location:http://webdev.cs.uwosh.edu/students/meshir78/HotDogCharlies/main.html");
?>
</body>
</html>