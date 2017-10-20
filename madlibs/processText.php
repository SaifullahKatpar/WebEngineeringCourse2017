 	<?php


 		function getPlaceholders($myStory){
				$count = 0;
				$positions2 = array();
				$positions1 = array();
				$find1 = "<";
				$find2 = ">";
				for($i = 0; $i<strlen($myStory); $i++)
				{
				     $pos1 = strpos($myStory, $find1, $count);
				     $pos2 = strpos($myStory, $find2, $count);
				     if($pos1 == $count){
				           $positions1[] = $pos1;
				           $positions2[] = $pos2;
				     }
				     $count++;
				}

							for($i = 0; $i<count($positions1); $i++){
								$len  = $positions2[$i] - $positions1[$i];
								$len  = $positions2[$i] - $positions1[$i];
								$_SESSION["words"][$i] =substr($myStory,$positions1[$i]+1,$len-1);
							}


 		} // func end getPlaceholders($myStory)




 		function getStory(){
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
				
		 		if(isset($_SESSION["id"])) {
		 			$_SESSION["id"] = ($_SESSION["id"]+1)%5;
		 			if($_SESSION["id"]==0)
					 			$_SESSION["id"] = 1;

		 		} 
		 		else{
		 			$_SESSION["id"] = 1;
		 		}
		 				
				$sql = "SELECT id,text FROM story WHERE id=".$_SESSION["id"].";";

				$result = $conn->query($sql);

				if ($result->num_rows > 0) {

					$row = $result->fetch_assoc();
					$myStory = $row["text"];
					$_SESSION["story"] = $myStory;
					getPlaceholders($myStory);
				}
				$conn->close();			

 		}


 		function displayStory(){
 			header("location: storyBoard.php");
 		}
		?>

