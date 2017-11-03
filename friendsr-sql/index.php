<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php include "fetchData.php" ?>

</head>

<body>


<div id="menu" style="position: fixed;">
		<ul id="items">
			<li>
				<a href='#'>Friendsr</a>
			</li>
			<li>
				<a href='#'>Hello World!</a>
			</li>
			<li>
				<a href='#'>Settings</a>				
			</li>
			<li>
				<a href='#'>Details Activity</a>				
			</li>

		</ul>
</div>


<div id="images">
<?php  $data = displayImages();?>
	
</div>

</body>
</html>