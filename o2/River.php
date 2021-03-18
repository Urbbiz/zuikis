<?php

abstract class River extends Eat {

    protected $river;
    private $gold = 400;

    public function __construct()
    {
        echo '<br>';
        echo 'Konstruojam RIVERI';
        $this->saySomething('M***');
    }

    public function setRiver($river)
    {
        $this->river = $river;
    }

    abstract protected function saySomething(string $words) : void;
}