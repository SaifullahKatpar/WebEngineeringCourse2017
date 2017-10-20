<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "tutorial";
	// create connection
	$conn = mysqli_connect($servername,$username,$password,$dbname);

	// check connection
	if(!$conn){
		die("Connecion failed: ".mysqli_connect_error());

	}
	echo "Connected Successfully";
?>