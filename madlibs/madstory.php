

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>	
		<center><img src="madlibs.png" >
		<h2> Welcome To Mad Stories.  I will ask you to put in words that will produce a story. A story that will make you laugh</h2>
		</center>



		<div style="margin: 100px 0 0 600px">
			
			<a href="play.php"><button ><img src="black_play.png" width="50" height="50"></button>


		</div>
</body>


</html>

<?php
	function getStory($num){

		$my_file = $num.'.txt';
		$handle = fopen($my_file, 'r');
		$data = fread($handle,filesize($my_file));
	}
?>



