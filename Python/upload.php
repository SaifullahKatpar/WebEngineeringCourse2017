<?php
$target_file = $_FILES["fileToUpload"]["name"];
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    
    system("python script.py ".$target_file);
}
?>