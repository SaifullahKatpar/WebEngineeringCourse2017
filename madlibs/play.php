
<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mad Story Maker</title>

	<style type="text/css">
		body{
			background-image: url("oggy.jpg");
			background-repeat: no-repeat;
		}
		span{
			color:green;
			font-family: verdana;
		 	font-size: 35px;

		}
		div{
						margin: 100px 0 0px 600px;
		}

		#button {
		    background-color: #4CAF50; /* Green */
		    border: none;
		    color: white;
		    padding: 15px 32px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
			}

#textbox { 
    border: 1px solid #c4c4c4; 
    height: 35px; 
    width: 275px; 
    font-size: 20px; 
    padding: 4px 4px 4px 4px; 
    border-radius: 4px; 
    -moz-border-radius: 4px; 
    -webkit-border-radius: 4px; 
    box-shadow: 0px 0px 8px #d9d9d9; 
    -moz-box-shadow: 0px 0px 8px #d9d9d9; 
    -webkit-box-shadow: 0px 0px 8px #d9d9d9; 
} 
 
#textbox:focus { 
    outline: none; 
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 8px #7bc1f7; 
    -moz-box-shadow: 0px 0px 8px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 8px #7bc1f7; 
} 	


</style>



</head>
<body>
 	
<?php include "processText.php"; ?>

<?php

		// create a words array, if not created
 		if(!isset($_SESSION["words"])) $_SESSION["words"] = array();
 		// get a story if not got or old completed
 		if(!isset($_SESSION["story"]) || $_SESSION["story"] =="")
 		{
 			getStory();
 		} 
 		// replace angle brackets and replace with new words
 		if(isset($_GET["word"])){
 			$_SESSION["story"] = str_replace("<", "", ($_SESSION["story"]));
 			$_SESSION["story"] =str_replace(">", "", ($_SESSION["story"]));

	 		$_SESSION["story"]	=str_replace($_SESSION["words"][$_SESSION["index_of_word"]], $_GET["word"], ($_SESSION["story"]));
 		}	

 		// index of each word in the array increments by each submit click
		if(isset($_SESSION["index_of_word"])){
			$_SESSION["index_of_word"] = $_SESSION["index_of_word"] +1;
		}else{
			$_SESSION["index_of_word"] = 0;

		}


?>
 	<div>		
		<span>Fill in the words to complete the sotry!</span>

		<?php 
		$rem= count($_SESSION['words'])-$_SESSION['index_of_word']; 
		if($rem<=0)	displayStory();
		else				
			echo "<br><span>".$rem." words remaining</span>";
		?>

		</div>


		<div>
		<form method="get" action="play.php">			
		<input type="text" id="textbox" name="word" 
		placeholder=	
				<?php echo $_SESSION["words"][$_SESSION["index_of_word"]];?>	
		>
		<input type="submit" id ="button" name="submit" >
		</form>
 	</div>



 </body>
</html>


