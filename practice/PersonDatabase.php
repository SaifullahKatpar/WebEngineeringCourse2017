<?php

/**
* 
*/
class PersonDatabase
{
	
	function insertData($firstname,$lastname,$email){
			$conn = new mysqli("localhost", "root","", "Person");
			// Check connection
			if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			}
			// prepare and bind
			$stmt = $conn->prepare("INSERT INTO `person`(`Firsname`, `Lastname`, `email`) VALUES (?, ?, ?)");
			$stmt->bind_param("sss",$firstname, $lastname, $email);
			$stmt->execute();
			echo "New records created successfully";
		    $stmt->close();
			$conn->close();
	}


	function getData()
	{
		$conn = new mysqli("localhost", "root","", "Person");
		$sql = "SELECT * FROM person";
		$result=  $conn->query($sql);
		$output="<tbody id='LotteryTableBody'>";
		while($row = mysqli_fetch_array($result))
		{
		$output.= "<tr>";
		$output.= "<td>" . $row["id"]. "</td>";
		$output.= "<td>" . $row["Firsname"]. "</td>";
		$output.= "<td>" . $row["Lastname"]. "</td>";
		$output.= "<td>" . $row["email"]. "</td>";
		$output.= "<td> <button class='btn btn-primary updateButton' id='".$row["id"]."'>Update </button> </td>";
		$output.= "<td> <button class='btn btn-danger DeleteButton' id='".$row["id"]."+"."Delete"."'>  Close </button> </tr>";
		$output.= "</tr>";     
		}
      	$output.="</tbody>";
		return $output;
    }





}

	
?>