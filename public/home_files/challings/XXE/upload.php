<?php

if(isset($_POST["submit"])){
    $target_dir = "Uploads/";
    $target_file = $target_dir . basename("hack.xml");
    
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "File " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}