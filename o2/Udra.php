<?php

class Udra extends River {


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

}