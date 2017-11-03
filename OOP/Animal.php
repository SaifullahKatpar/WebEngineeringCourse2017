<?php
   class Animal {
		 
	var $food;
	var $livingPlace;		


	function setFood($f){
	         $this->food = $f;
  	}

	function setLivingPlace($l){
	         $this->livingPlace = $l;
  	}
      
	function getFood(){
         echo $this->food ."<br/>";
      }      
	function getLivingPlace(){
         echo $this->livingPlace ."<br/>";
      }      


   }
?>