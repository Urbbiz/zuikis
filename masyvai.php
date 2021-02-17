<?php

// $masyvas = [
//     'mano knygos',
//     'zurnalai' => 'seni žurnalai',
//     'zaislai' => 'katės žaislai',
//     'mano batai'
// ];


// echo '<pre>';

// foreach($masyvas as $index => $value) {
//     if ('seni žurnalai' == $value) {
//         $masyvas[$index] = 'Dar daugiau kates zaislu';
//     }
// }

// print_r($masyvas);


// $masyvas = [];
// $masyvas['kojinės'] = [];
// $masyvas['kojinės']['zalios'] = 'visos žalios kojinės';
// $masyvas['kojinės']['juodos'] = 'visos juodos kojinės';
// $masyvas['kojinės']['margos'] = [];
// $masyvas['kojinės']['margos']['tamsios margos kojinės'] = 'tamsios kojinės';
// $masyvas['kojinės']['margos']['sviesios margos kojinės'] = 'sviesios kojinės';
// $masyvas['pirstines'] = [];
// $masyvas['pirstines']['kailines'] = 'mano kailinės pirštinės';
// $masyvas['pirstines']['odines'] = 'mano odinės pirštinės';
// $masyvas['nosines'] = 'visos mano nosinės';






// foreach($masyvas as $index => $value) {
//     echo '<br>';
//     echo $index.'===>'.$value;
// }

// $m = range(1,5);
// shuffle($m);
// print_r($m);

// echo '<br>';
// echo current($m);
// echo '<br>';
// echo next($m);
// echo '<br>';
// echo current($m);


// $A = 5;
// $B = &$A;
// $A = 17;

// echo '<br>';
// echo $B;






// $m = ['red', 'green', 'yellow', 'blue'];

// foreach($m as &$value) {}

// unset($value);

// foreach($m as $value) {
//     echo '<br>';
//     echo $value;
// }

// while(true) {
// for ($i = 1; $i <= 15; $i++){
//     if (rand(0, 10)> 9){
//         break 2;
//     }
//     echo $i;
//     echo '<br>';
//   }
//   echo 'Ciklo pabaiga';
// } //<------ antras breikas

// $i = 0;
// for ($i = 0;$i <= 5;$i++){
//    if ($i==2){
//        continue;
//    }
//    echo $i;
//    echo '<br>';
// }
// echo 'Ciklo pabaiga';


// $mas = [];


// $mas[] = 'bla bla'; // vietoj array_push


// $masyvas = [];
foreach(range(1, 10) as $index1 => $_) {
    foreach(range(1, 5) as $index2 => $_) {
        $masyvas[$index1][$index2] = rand(5, 25);
    }
}

$counter = 0;
foreach($masyvas as $mazas_masyvas) {
    foreach($mazas_masyvas as $reiksmes) {
        if(10 < $reiksmes) {
            $counter++; 
        }
    }
}
_dc($masyvas);
usort($masyvas, function($a, $b){
    return $b[3] <=> $a[3];
});
_dc($masyvas);

// foreach($masyvas as $val) {

// }













