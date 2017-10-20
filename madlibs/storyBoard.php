
<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
			body{
				background-image: url("mrbean.jpg");				
				background-repeat: no-repeat;	
				}

			p{
				font-family: verdana;

			}
			div{

				border-radius: 10px;
				width: 600px;
				height: 400px;
				padding: 10px;
				margin: 100px 0px 0px 650px;
				background-color: yellow;
			}

a {
    text-decoration: none;
    display: inline-block;
    padding: 8px 16px;
}

a:hover {
    background-color: #ddd;
    color: black;
}


.next {
    background-color: #4CAF50;
    color: white;
}

.round {
    border-radius: 50%;
}
	</style>
</head>
<body >



<div >
	<p>

	<b><?php   if(isset($_SESSION["story"]) && $_SESSION["story"]!="") echo ($_SESSION["story"]);
	else header("play.php");
	?>
	</p>
	

</div>
 	<?php 
 			unset($_SESSION["words"]);
 			unset($_SESSION["index_of_word"]);
 			unset($_SESSION["story"]);
 	 ?>

<a href="play.php" class="next">Next &raquo;</a>


</body>
</html>