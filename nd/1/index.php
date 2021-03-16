<?php
include 'Stikline.php';

$s100 = new Stikline(100);
$s150 = new Stikline(150);
$s200 = new Stikline(200);



$s200->ipilti(200);
$s150->ipilti($s200->ispilti());
$s100->ipilti($s150->ispilti());

echo '<pre>';

_dc($s100);
_dc($s150);
_dc($s200);
