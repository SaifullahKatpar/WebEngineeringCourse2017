<?php  

	session_start();
	$_SESSION['username'] = $_GET['username'];
	$_SESSION['password'] = $_GET['password'];

	$_SESSION['isLogin'] = true;

	if($_SESSION['isLogin']){
		header('location: welcome.php');		
	}
	else{
		echo "Log in again!";
	}
?>