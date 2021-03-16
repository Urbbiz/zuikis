<?php
namespace Miskas\Mazas;
use Ramsey\Uuid\Uuid;


class Grybas {

    private $valgomas, $sukirmijes, $svoris;


    public function __construct()
    {
        $this->valgomas = (bool) rand(0,1);
        $this->sukirmijes = (bool) rand(0,1);
        $this->svoris = rand(5,45);
        echo Uuid::uuid4().'<br>';
    }

    public function __get($savybe)
    {
        return $this->$savybe;
    }

    


}