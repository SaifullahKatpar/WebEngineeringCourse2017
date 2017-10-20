<?php
	$str = $_POST["cnic"];
	$pattern = "/^s[\s]s/";
	preg_match($pattern, $str,$matches);
	print_r($matches);
?>



