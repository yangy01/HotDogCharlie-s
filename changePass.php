<html>
<body>
<?php
	
	$oldpass = $_POST["oldpass"];
	$newpass = $_POST["newpass"];
	
	try
    {
	$db = new PDO("mysql:dbname=meshir78;host=localhost", "meshir78", "rmesh0484278");
	$rows = $db->query("SELECT `password` FROM `HotDogUsers` WHERE `password` ='$oldpass'");
	foreach($rows as $row)
	{
		if($oldpass == $row['password'])
		{
			$rows = $db->exec("UPDATE `HotDogUsers` SET `password`='$newpass' WHERE `password`='$oldpass'");	
		}	
	}
	header("Location:http://webdev.cs.uwosh.edu/students/meshir78/HotDogCharlies/mainAdmin.php");
    
}
catch(PDOException $e)
{
// roll back the transaction if something failed
$conn->rollback();
echo "Error: " . $e->getMessage();
}

$db = null;
	
	
?>
</body>
</html>