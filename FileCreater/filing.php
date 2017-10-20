<?php
		
	$fhandle = fopen('paragraph.txt', 'w') or die("Unable to open file!");
	fwrite($fhandle, "My School");

	fclose($fhandle);

	$fhandle = fopen('paragraph.txt', 'r') or die("Unable to open file!");
	echo fread($fhandle, filesize("paragraph.txt"));
	fclose($fhandle);


	echo "<div style='color:red'>";
	$fhandle = fopen('2.txt', 'r') or die("Unable to open file!");
		while(!feof($fhandle)) {
		  echo fgets($fhandle) . "<br>";
		}
			echo "</div>";

	fclose($fhandle);




echo "<div style='color:green'>";
	$fhandle = fopen('2.txt', 'r') or die("Unable to open file!");
		while(!feof($fhandle)) {
				  echo fgetc($fhandle);
		}
			echo "</div>";

	fclose($fhandle);


?>
