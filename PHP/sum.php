<?php  

   $num1 = $_GET['num1'];
   $num2 = $_GET['num2'];
   $op = $_GET['op'];

    	if($op=='+'){
   			$sum = $num1 + $num2; 
		   echo $sum;
    	}
    	elseif ($op=='-') {
   			$dif = $num1 - $num2; 
		   echo $dif;
    	}
    	elseif ($op=='/') {
   			$quo = $num1 / $num2; 
		   echo $quo;
    	}
    	elseif ($op=='*') {
   			$pro = $num1 * $num2; 
		   echo $pro;
    	}

?>