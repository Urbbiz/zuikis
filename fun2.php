<?php

$kodas = md5(time());

_d($kodas);

function h1($text)
{
    if (is_array($text)) {
        $text = $text[0];
    }
    return '<h1 style="display:inline;">'.$text.'</h1>'; 
}

// $pakeistasKodas = preg_replace_callback('/\d+/', function($match){
//     _d($match);
//     return h1($match[0]);
// }, $kodas);

$pakeistasKodas = preg_replace_callback('/\d+/', 'h1', $kodas);





echo $pakeistasKodas;