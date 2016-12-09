<?php
	$servername = "localhost";
$username = "thaok52";
$password = "kt022096";
$dbname = "thaok52";

// Create connection
$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$rows = $db->query("SELECT `data` FROM `Gallery`");
		foreach($rows as $row){                
?>
<p>
	   <?=$row['data']?>
</p>
	
	<?php
		}
?>