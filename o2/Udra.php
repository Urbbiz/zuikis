<?php

class Udra extends River implements Miskas, Giria {


    public function __construct()
    {
        parent::__construct();
        echo '<br>';
        echo 'Konstruojam udra';
        $this->letsEat();
    }

    public function letsEat()
    {
        echo '<br>Niam Niam Niam Niam Niam Niam Niam Niam</br>';
    }

    public function saySomething(string $ggg) : void
    {
        foreach(range(1, 3) as $_) {
            echo $ggg;
        }
    }

    public function saySomething222(string $words) : void
    {
        foreach(range(1, 42) as $_) {
            echo $words;
        }
    }

    public function bla1(string $a1) : void{}
    public function bla2(string $a1) : void{}

}