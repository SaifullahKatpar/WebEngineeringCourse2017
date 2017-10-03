<!DOCTYPE html>
<html>
<body>

<form action="PythonPHP.php" method="post" enctype="multipart/form-data">
    Select File:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Count Words" name="submit">
</form>

<?php
$target_file = $_FILES["fileToUpload"]["name"];
if(isset($_POST["submit"])) {
    
//    system("python script.py ".$target_file);
$command = escapeshellcmd('python script.py '.$target_file);
$output = shell_exec($command);
echo "<h1 >".$output."</h1>";



}
?>
</body>
</html>