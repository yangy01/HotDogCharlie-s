<?php
    $photo = $_POST['photo'];

    $db = new PDO("mysql:dbname=meshir78;host=localhost", "meshir78", "rmesh0484278");
    $rows = $db->exec("DELETE FROM `Gallery` WHERE `image`='$photo'");

    header("Location:http://webdev.cs.uwosh.edu/students/meshir78/HotDogCharlies/galleryAdmin.php");
   
?>