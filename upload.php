<?php
    error_reporting(E_ERROR | E_PARSE);

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
 
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg"
|| $imageFileType == "gif" ) {
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
            $db = new PDO("mysql:dbname=meshir78;host=localhost", "meshir78", "rmesh0484278");
            $rows = $db->exec("INSERT INTO `Gallery`(`image`) VALUES ('$target_file')");
        }
    }
        header("Location:http://webdev.cs.uwosh.edu/students/meshir78/HotDogCharlies/gallery.php");
   
?>