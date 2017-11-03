<?php
 include_once("Mammal.php");      

 $animal = new Mammal;

 $animal->setFood('meat');
 $animal->setLivingPlace('jungle');
 $animal->setSkin('fur');
 $animal->setProduce('milk');
 $animal->setBlood('cold');


 $animal->getFood();
 $animal->getLivingPlace();
 $animal->getSkin();
 $animal->getProduce();
 $animal->getBlood();



?>