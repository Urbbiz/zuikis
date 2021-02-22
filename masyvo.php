<?php

$dviMatisMasyvas = []; // sukuria nauja tuscia masyva;

// foreach(range(1, 10) as $indexD => $valD) {
//     $r = rand(100, 999);
//     foreach(range(1, 5) as $indexM => $valM) {
//         $dviMatisMasyvas[$r][$indexM] = rand(5,25);
//         //$indexM --> 0, 1 ... 4
//         //+++++++++++++++++++++++++++++++++++++++++++
//         // $dviMatisMasyvas[$indexD][] = rand(5,25);
//         // [] --> automatiskai generuojamas
//         // [] --> 0, 1 ... 4
//     }
// }

// $dviMatisMasyvas = []; // sukuria nauja tuscia masyva;

foreach(range(1, 5) as $indexM => $valM) {
    foreach(range(1, 10) as $indexD => $valD) {
        $dviMatisMasyvas[$indexD][$indexM] = rand(5,25);
    }
}

$d10 = 0;
$dElementas = PHP_INT_MIN;
$mas = [];
$sum = [];
_d($dElementas);
foreach($dviMatisMasyvas as $indexD => $valD) {

    $sum[$indexD] = array_sum($valD);

    foreach($valD as $indexM => $valM) {
        if ($valM > 10) {
            $d10++; 
        }
        if ($valM > $dElementas) {
            $dElementas = $valM; 
        }
        $mas[$indexM] = ($mas[$indexM] ?? 0)  + $valM;
    }

    $dviMatisMasyvas[$indexD][] = rand(5,25);
    $dviMatisMasyvas[$indexD][] = rand(5,25);


}

// _dc($d10);
// _dc($dElementas);
// _dc($mas);
// _dc($sum);



// _dc($dviMatisMasyvas);



// $dviMatisMasyvas = []; // sukuria nauja tuscia masyva;
$az = range('A', 'Z');

$dviMatisMasyvas = [];
foreach(range(1, 10) as $indexD => $valD) {

    $ilgis = rand(2, 20);
    foreach(range(1, $ilgis) as $indexM => $valM) {
        
        $dviMatisMasyvas[$indexD][$indexM] = $az[rand(0,25)];
    }
    sort($dviMatisMasyvas[$indexD]);

}




$tri = [];

$value = ['#','%','+','*','@','裡'];

foreach(range(1, 10) as $index1 => $val1) {
    foreach(range(1, 10) as $index2 => $val2) {
        $tri[$index1][$index2]['value'] = $value[rand(0,5)];
        $tri[$index1][$index2]['color'] =
        $randomColor = "#" . substr(md5(rand()), 0, 6);
        //'#'.(dechex(rand(0,255))).(dechex(rand(0,255))).(dechex(rand(0,255)));
    }
}


foreach($tri as $row) {
    echo '<div>';
    foreach($row as $el) {
        echo '<span style="display:inline-block; width: 20px;color:'.$el['color'].';">'.$el['value'].'</span>';
    }
    echo '</div>';
}



_dc(dechex(16));

