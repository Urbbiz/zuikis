<?php


$num = 5;
$location = 'tree';
$location2 = 'krūmas';

$format = 'There are %2$s monkeys in the %3$s and the %1$s';


echo sprintf($format, $location, $num,  $location2);

echo "<br><br><br>";

$money1 = 68.75;
$money2 = 54.35;
$money = $money1 * $money2;
echo $money;
echo "<br><br><br>";
$formatted = sprintf("%0.3f", $money);
echo $formatted;

echo "<br><br><br>";

echo md5('123');

echo "<br><br><br>";

echo sha1('123');