<?php


$trecias = 0;

function sudeti($vienas, $du)
{
    global $trecias; // <--- is global scoupo. is principo bloga praktika
    
    // _dc($GLOBALS['trecias']); <--- super senoviskas

    // $trecias++;

    $rezultatas = $vienas + $du + $trecias;
    return $rezultatas;
}

$m = [555555=>4, 87987978=>16];

// echo $trecias;
// echo sudeti(...$m);
// echo $trecias;




function vidurkis($a1, $a2, ...$skaiciai)
{
   
    _dc($a2);
   
    $sudetis = 0;
   foreach ($skaiciai as $val)
 {
   $sudetis += $val;
 }
 $vidurkis = $sudetis / count($skaiciai);
 return $vidurkis;
}
// echo vidurkis(1,2, 5);


echo '<br><br>';

function foo() {
    static $index = 0;
    $index++;
    echo $index;
}

foo();
foo();
foo();

// echo '<br><br><br><br>';

function recursive($num){
    echo $num, '<br>';
    if ($num < 5){
        recursive($num + 1);
    }
    echo "$num - bla bla<br>";
}
recursive(1);

$f = function($a, $b){
    return $a[0] <=> $b[0];
};

function aaa($a, $b){
    return $a[0] <=> $b[0];
};

$masyvas = [
    ['a','d'],
    ['v','e'],
    ['a','c'],
    ['s','r'],
];
usort($masyvas, function($a, $b){
    return $a[0] <=> $b[0];
});

// _dc($masyvas);

// echo '<br><br><br><br>';

$result = 0;

$one = function()
{ 
    var_dump($result); 
};
 


$two = function() use ($result)
{ 
    var_dump($result); 
};


$three = function() use (&$result)
{ var_dump($result); };
 
$result++;
 
$one();    // NULL: $result nepasiekiamas
$two();    // int(0): $result nukopijuojamas
$three();    // int(1)
$result++;
$three();
$two();


