<?php
$loc = $_GET["location"];

system('python geojson.py '.$loc);




?>
