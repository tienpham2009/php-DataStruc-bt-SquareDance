<?php
include_once "Dancer/Dancer.php";
include_once "Dancer/interfaceGender.php";
include_once "Dancer/SquareDancer.php";

$dancer1 = new Dancer("Hung","Male");
$dancer2 = new Dancer("Nam","Male");
$dancer3 = new Dancer("Hoang","Male");
$dancer4 = new Dancer("Linh","Female");
$dancer5 = new Dancer("My","Female");
$dancer6 = new Dancer("Thanh","Male");
$dancer7 = new Dancer("Quynh","Female");

$squareDancer = new SquareDancer();
$squareDancer->addDancer($dancer1);
$squareDancer->addDancer($dancer2);
$squareDancer->addDancer($dancer3);
$squareDancer->addDancer($dancer4);
$squareDancer->addDancer($dancer5);
$squareDancer->addDancer($dancer6);
$squareDancer->addDancer($dancer7);

echo $squareDancer->pairDancer();