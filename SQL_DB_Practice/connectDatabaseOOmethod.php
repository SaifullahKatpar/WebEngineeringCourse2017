<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "tutorial";

// create connection
$conn = new mysqli($servername,$username,$password,$dbName);

// check connection
if ($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}
else{
echo "connected successfully<br>";
	
}

/*
$sql = "INSERT INTO Courses (title,instructor)
VALUES ('Theory of Automata', 'Irshad Nazeer')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$sql = "SELECT id, title, instructor FROM Courses";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
	echo "<table>
    		<tr>	
	    		<th> ID</th>
	    		<th> Title</th>
	    		<th> Instructor</th>
	    	</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

    	echo "
    	<tr>	    
	    	<td>". $row["id"]."	</td>
			<td>".$row["title"]."</td>
			<td>".$row["instructor"]."</td>		
		</tr> ";
    }
} else {
    echo "0 results";
}
echo "</table>";
$conn->close();
*/

// change database

$dbname = "institutes";
Mysqli_select_db($conn,$dbname);


if ($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}
else{
echo "connected successfully";
}




$result = $conn->query("SELECT * FROM universities");
while($row =  $result->fetch_assoc()){
		print_r($row);
}

	
?>