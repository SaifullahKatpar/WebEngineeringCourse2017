


<?php
	session_start();
?>

<?php
	include('fetchdata.php');

			
	if( (!isset($_SESSION['run']) && !isset($_SESSION['done'])) || ( isset($_SESSION['done']) && $_SESSION['done']  ) ){
		fetchWord();
	}
//	echo isset($_GET['letter']);
//	echo isset($_SESSION['word']);

	if ( isset($_GET['letter'])  && $_GET['letter']!='' && strpos(strtolower($_SESSION['word']), strtolower($_GET['letter'])) !== false) {

			echo $_SESSION['word'];
//		    echo 'true';


		}
		else{
	    echo 'false';
	    $_SESSION['life'] = $_SESSION['life'] -1;
		}


			if(isset($_SESSION["letters"]) && isset($_GET['letter']) && $_GET['letter']!='') {
			$i = count($_SESSION["letters"]);
			($_SESSION["letters"])[$i] = $_GET['letter'];							
			}


		if($_SESSION['life']<1){
//			exit();
			echo $_SESSION['life'];
			session_unset();
			echo "<h1> YOU LOST</h1>";
		}

//		echo $_SESSION['life'];
		$_SESSION['done'] = true;

?>
<html>
<head>
	<title></title>
	<style type="text/css">
		.img-class{
			margin-top: 200px;
			margin-left: 400px;
			width:200px;
			height: 300px;
		}
		.alphabet-class{
			width:400px;
			height: 400px;
			margin-top: -200px;
			margin-left: 600px;

		}
	</style>
</head>
<body>
	<div class="img-class">
		<img src=".\images\1.gif">
	</div>

	<div class="alphabet-class">
	<form action="Hangman.php" method="GET">
			<h2 style="font-family: verdana;color:green">
			<?php 
			if(!isset($_SESSION["letters"])) 
				$_SESSION["letters"] = array();
			else{

					$arr= $_SESSION["letters"];
					$arrlength = count($_SESSION["letters"]);
					for($x = 0; $x < $arrlength; $x++) {
					    echo $arr[$x];
					    echo "   ";
					}			
				//	print_r($_SESSION["letters"])
			}
			?>
			</h2>
			<br><br>
			<input type = "text" name="letter">
			<input type="submit" name="submit">			
	</form>

	</div>
</body>
</html>



