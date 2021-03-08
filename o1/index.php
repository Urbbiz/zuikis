<?php


include __DIR__ .'/Bebras.php';
include __DIR__ .'/Udra.php';



$obj1 = new Bebras;

$obj2 = $obj1;

// $obj2 = new Bebras;

$obj3 = new Udra;



echo '<pre>';



// echo $obj1->age;

$obj1->getAge();


$obj1->tail = 'SMALL';




echo '<br>';
var_dump($obj1);
var_dump($obj2);
var_dump($obj3);


