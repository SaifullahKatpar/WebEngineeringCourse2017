<?php
	$str = $_POST["textInput"];
	$pattern = '/'.$_POST['pattern'].'/';
	preg_match($pattern, $str,$match);
	print_r($match);
?>



