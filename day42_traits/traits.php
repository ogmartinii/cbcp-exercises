<?php

class animal
{
    protected $hungry = true;

    public function eat()
    {
        $this->hungry = false;
    }
}

class dog extends animal 
{
    use domesticated;
}

class wolf extends animal
{

}

trait domesticated
{
    public $owners_mood = 'unhappy';

    public function beFed()
    {
        $this->hungry = false;

        $this->owners_mood = 'happy';
    }
}

$ben = new dog();
$ben->eat();

$fang = new wolf();
$fang->eat();

var_dump($ben);
var_dump($fang);