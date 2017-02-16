<?php

$name = 'James';

$name = $name . ' Bond';  // or 

$name .= ' Bond';

$bond_info = array(
    'first_name' => 'James',
    'last_name' => 'Bond',
    'gun' => 'Walther PPK',
    'car' => 'Aston Martin',
    'enemy' => 'Stavro Blofeld',
    'relationship_status' => 'widower',
    'cases' => 24
);

echo 'The name is ' 
. $bond_info['last_name'] 
. '. ' 
. $bond_info['first_name'] 
. ' ' 
. $bond_info['last_name'] 
. '.'
. '<br>';

print 'One day when I was driving my ' 
. $bond_info['car']
. ' in the Alps '
. $bond_info['enemy']
. ' came along and made me a '
. $bond_info['relationship_status']
. '. If only I had my '
. $bond_info['gun']
. ' with me!'
. '<br>';

$bond_info['last_case'] = 'Spectre';

var_dump($bond_info);

class bondCase
{
    protected static $cases_solved = 0;
    protected static $girls_met = 0;
    
    protected $name = null;
    protected $year = null;
    protected $enemy = null;
    protected $girls = array();

    public static function getAvgGirlsPerCase()
    {
        return static::$girls_met / static::$cases_solved;
    }

    public function setName($name) 
    {
        $this->name = $name;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function setEnemy($enemy) 
    {
        $this->enemy = $enemy;
    }

    public function getName() 
    {
        return $this->name;
    }

    public function getYear() 
    {
        return $this->year;
    }

    public function getEnemy() 
    {
        return $this->enemy;
    }

    public function __construct($year)
    {
        $this->year = $year;
        static::$cases_solved++;
    }

    public function addGirl($name)
    {
        $this->girls[] = $name;
        static::$girls_met++;
    }

}

$spectre = new bondCase(2015);
$spectre->setName('Spectre');
$spectre->setEnemy('Ernst Stavro Blofeld');
$spectre->addGirl('Estrella');
$spectre->addGirl('Lucia Sciarra');
$spectre->addGirl('Madeleine Swann');

var_dump($spectre);

$casino_royale = new bondCase(2006);
$casino_royale->setName('Casino Royale');
$casino_royale->setEnemy('Le Chiffre');
$casino_royale->addGirl('Vesper Lynd');
$casino_royale->addGirl('Solange Dimitrios');

print 'On average Bond has met '
. bondCase::getAvgGirlsPerCase()
. ' girls per case.';