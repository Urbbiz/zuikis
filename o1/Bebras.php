<?php

class Bebras {

    public $tail = 'BIG';
    private $age = 15;

    private static $legs = 2;

    public $prop = 'BLABLA';

    private $udra;

    private $wife = 'blod', $children1 = 'beaver1', $children2 = 'beaver3', $dog = 'bobik';

    private static $BebroObjektas;
    
    static public function createBebras($age)
    {
        echo 'Lets create';

        

        return self::$BebroObjektas ?? self::$BebroObjektas = new self($age);

    }
    
    
    
    private function __construct($age)
    {
        echo '<br>';
        echo 'Konstruojam';

        $this->udra = new Udra; //<--- dinamiskai sukurta savybe

        self::$legs = 85;

        echo self::$legs;

        echo '<br>';
        if (is_integer($age)) {
            $this->init1($age);
        }
        if (is_string($age)) {
            $this->init2($age);
        }
        
        // $this->age = $age;
    }

    public function init1($age)
    {
        echo '<br>';
        echo 'INIT1';
        echo '<br>';
        $this->age = $age;
    }

    public function init2($age)
    {
        echo '<br>';
        echo 'INIT2';
        echo '<br>';
        $this->wife = $age;
    }


    public function __get($prop)
    {
        if (!in_array($prop, ['wife', 'children1', 'age'])) {
            return;
        }
        
        return $this->$prop;
    }


    public function __set($prop, $value)
    {
        if ('age' == $prop && $value > 30) {
            echo 'Blogi metai';
            return;
        }
        
        $this->$prop = $value;
    }


    public function sayTail()
    {
        echo '<br>';
        echo 'Hello '.$this->tail;
        echo '<br>';
    }


    public function getAge() //<----- geteris
    {
        echo '<br>';
        echo 'Age is: '.rand(1, 18);
        echo '<br>';
    }

    public function setAge($age) //<----- seteris
    {
        if ($age > 30) {
            echo 'Blogi metai';
            return;
        }
        
        $this->age = $age;
        
    }


}