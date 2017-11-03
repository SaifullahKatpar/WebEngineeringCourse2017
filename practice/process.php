<?php
// process.php
include_once("PersonDatabase.php");

$model = new PersonDatabase();

$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

    if (isset($_POST['Firstname']) && isset($_POST['Lastname']) &&isset($_POST['email'])){
    $model->insertData($_POST['Firstname'],$_POST['Lastname'],$_POST['email']);
    }
    elseif (isset($_POST['LoadTable'])) {
    echo $model->getData();
    }        





?>