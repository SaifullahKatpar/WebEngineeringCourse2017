<?php



$my_file = 'file.php';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file); //implicitly crea
$color = "red";
$data = "
	<html>
		<body>
		<h1 style='color:".$color."';>HELLO</h1>
		</body>
	</html>
";

fwrite($handle, $data);

fclose($handle);
header("location: file.php");
?>