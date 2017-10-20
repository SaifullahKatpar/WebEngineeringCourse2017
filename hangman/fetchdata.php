							

<?php
				function fetchWord(){

							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbName = "Hangman";

							// create connection
							$conn = new mysqli($servername,$username,$password,$dbName);

							// check connection
							if ($conn->connect_error){
								die("Connection failed: ".$conn->connect_error);
							}
							else{
							//echo "connected successfully<br>";
								
							}


							$_SESSION['run'] = true;
							if(!isset($_SESSION['life'])){
								$_SESSION['life'] = 6;
							}
							$num = rand(3002, 4198);
							$sql = "SELECT word FROM Words WHERE id=".$num;
							$result = $conn->query($sql);
							$row = $result->fetch_assoc();
							print_r($row['word']);
							$_SESSION['word'] = $row['word'];
							$_SESSION['run'] = true;
						    echo $_SESSION['word'];
							$conn->close();
					}


?>