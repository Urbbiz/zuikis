<?php

class Bebras {

    public $tail = 'BIG';
    private $age = 23;



    public function sayTail()
    {
        echo '<br>';
        echo 'Hello '.$this->tail;
        echo '<br>';
    }


    public function getAge() //<----- geteris
    {
        echo '<br>';
        echo 'Age is: '.$this->age;
        echo '<br>';
    }

}