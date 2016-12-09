<?php
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
 
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg"
|| $imageFileType == "gif" ) {
                move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
                header("Location:http://webdev.cs.uwosh.edu/students/meshir78/HotDogCharlies/gallery.php");
}
        }
    }
?>