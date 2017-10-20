<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "madstories";

// create connection
$conn = new mysqli($servername,$username,$password,$dbName);

// check connection
if ($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}
else{
echo "connected successfully<br>";
	
}

$sql = "SELECT id,text FROM story WHERE id=".$id.";";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
	$row = $result->fetch_assoc()
$conn->close();
	
?>