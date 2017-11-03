<?php

 $message= "Hello world!";
		echo $message, "<br>", "Length: ",strlen($message); // outputs 12
		echo "<br> Word Count:  ",str_word_count($message); // outputs 2
		echo "<br> Reverse:  ",strrev($message); // outputs !dlrow olleH
		echo "<br> Positions of 'word':  ",strpos($message, "world"); // outputs 6
		echo "<br> Replace: ", str_replace("world", "Saif", $message);
		
?>