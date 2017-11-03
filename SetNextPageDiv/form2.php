<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
			$headerColor = $_GET["header"];
			$menuBarColor = $_GET["menuBar"];
			$leftNavColor = $_GET["leftNav"];
			$mainContentColor = $_GET["mainContent"];
			$rightNavColor = $_GET["rightNav"];
			$footerColor = $_GET["footer"];	

			$menu1 = $_GET["menu1"];
			$menu2 = $_GET["menu2"];
			$menu3 = $_GET["menu3"];
			$menu4 = $_GET["menu4"];
			$menu5 = $_GET["menu5"];

	  ?>	
	  <style type="text/css">
	  body{
	  	font-size: 30px;
	  }
	  	#footer{
	  		margin-top: 10px;
	  	}
	  	#header{
	  		height:100px;
	  	}
	  	#menuBar{
	  		margin-top: 10px;	
	  	}
	  	#leftNav{
	  		margin-top: 20px;
	  		float: left;
	  		width:200px;
	  		height:400px;
	  	}
	  	#rightNav{
	  		width:200px;
	  		height:400px;
	  		float: right;
	  		margin-top: -400px;
	  	}
	  	#mainContent{

	  		height:400px;
	  		margin-top: 20px;
	  		margin-left: 250px;
	  		width:600px;

	  	}
	  	#menuBar span{
	  		margin-left: 100px;
	  		color:white;
	  		font-size: 30px;
	  		font-family: verdana;
	  	}
	  </style>
</head>
<body >
	<div id="header"  style="background-color: <?php echo $headerColor;?>">
		<center>Header</center>
	</div>

	<div id="menuBar"  style="background-color: <?php echo $menuBarColor;?>">
		<span><?php echo $menu1."";			?>
			</span>
		<span><?php echo $menu2."";			?>
			</span>
		<span><?php echo $menu3."";			?>
			</span>
		<span><?php echo $menu4."";			?>
			</span>
		<span><?php echo $menu5."";			?>
			</span>
	</div>

	<div id="leftNav"  style="background-color: <?php echo $leftNavColor;?>">
		<center>Left Menu</center>
		
	</div>

	<div id="mainContent"  style="background-color: <?php echo $mainContentColor;?>">
		<center>Content</center>
	</div>

	<div id="rightNav"  style="background-color: <?php echo $rightNavColor;?>">
		<center>Right Navigation</center>
	</div>

	<div id="footer"  style="background-color: <?php echo $footerColor;?>">
		<center>Footer</center>
	</div>
</body>
</html>