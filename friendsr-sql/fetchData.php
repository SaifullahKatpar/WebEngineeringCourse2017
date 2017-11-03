							

<?php
				function displayImages(){
							$link = mysqli_connect("localhost", "root", "", "Network");


							$sql = "SELECT short_name, full_name,detail FROM People;";

							if ($result = mysqli_query($link, $sql)) {

							    /* fetch associative array */
							    while ($row = mysqli_fetch_assoc($result)) {
							    	$src = ".\\images\\".$row['short_name'].".jpg";
							        echo "<img src= ".$src."><br><span'>".$row['full_name']."</span><br><br>";			

							    }

							    mysqli_free_result($result);
							}
							$conn->close();
					}


	


?>