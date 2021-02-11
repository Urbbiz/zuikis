<?php

// $drambliai = 0;
// if ($drambliai) {
//     echo 'Yra dramblių';
// }


// $drambliai = 10;
// $raganosiai = 9;
// if ($drambliai > $raganosiai) {
//     echo 'Dramblių yra daugiau';
// }
// elseif($drambliai < $raganosiai) {
//     echo 'Raganosių yra daugiau';
// }
// else {
//     echo 'Raganosių ir Drablių yra po lygiai';
// }


// $drambliai = 3;
// $raganosiai = 2;
// $begemotai = 6;
// if ($begemotai > $raganosiai &&
//  $begemotai > $drambliai) {
//      echo 'Begemotų yra daugiausiai';
//  }


// Jonas ir Petras žaidžiai šaškėm. Petras surenka taškų kiekį 
// nuo 10 iki 20, Jonas surenka taškų kiekį nuo 5 iki 25. 
// Išvesti žaidėjų vardus su taškų kiekiu ir
//  “Laimėjo: laimėtojo vardas”;
// Taškų kiekį generuokite funkcija rand();

$jonas = rand(10, 20);
$petras = rand(5, 25);


if ($jonas > $petras) {
    echo 'Laimėjo JONAS '.($jonas - $petras);
}
elseif ($jonas < $petras) {
    echo 'Laimėjo PETRAS '. ($jonas - $petras);
}
else {
    echo 'Nieks nelaimėjo '.($jonas - $petras);
}

$rezultatas = (true) ? '1' :  ( (false) ? '2' : '3' );


$rezultatas = $vienas ?? 8;// gražina 8
$vienas = null;
$rezultatas = $vienas ?? 8;// gražina 8
// $i=null; 
echo '<br>';
var_dump(isset($i)); // gražina FALSE
var_dump(null === $i);
echo '<br>';
$i=1;
var_dump(isset($i)); // gražina TRUE
echo '<br>';
$i=null; 
var_dump(isset($i)); //gražina FALSE


// $age = 23;

// $result = match (true) {
//     $age >= 65 => 'senior',
//     $age >= 25 => 'adult',
//     $age >= 18 => 'young adult',
//     default => 'kid',
// };

// var_dump($result);


