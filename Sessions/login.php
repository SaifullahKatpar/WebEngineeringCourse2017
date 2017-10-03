
<?php  

	session_start();
?>
<html>

<head>
	<style type="text/css">
		div{
			width: 300px;
			height: 100px;
			background-color: #4b6691;
			padding: 10px 10px 10px 10px;
			margin:auto;
			margin-top: 100px;
		}
	</style>

</head>
<body>

<div>
	<form action="session.php" method="GET">
	<input type="text" id="username" name="username" pattern="([a-zA-Z])+" required><br><br>
	<input type="password" id="password" name="password" required><br><br>
	<input type="submit" name="submit">	
</form>
	
</div>

</body>
</html>