<?php
	include_once('Animal.php');

   class Mammal extends Animal {
		 
	var $blood;
	var $produce;
	var $skin;		

	function setBlood($b){
	         $this->blood = $b;
  	}

	function setProduce($p){
	         $this->produce = $p;
  	}

	function setSkin($s){
	         $this->skin = $s;
  	}
      
	function getBlood(){
         echo $this->blood ."<br/>";
      }      
	function getProduce(){
         echo $this->produce ."<br/>";
      }      
	function getSkin(){
         echo $this->skin ."<br/>";
      }      

      
   }
?>