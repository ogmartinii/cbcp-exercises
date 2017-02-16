<?php
$country_names = array(
    'cz' => 'Czechia',
    'de' => 'Germany',
    'fr' => 'France'
);

$country_gdp = array(
    'cz' => 189982000000,
    'de' => 3371000000000,
    'fr' => 2422000000000
);


foreach($country_names as $country_code => $country_name)
{
    echo '<li>Nominal GDP value of ' .  $country_name . 'is $' . ($country_gdp[$country_code]/100000000) . '</li>';
}

class country
{
    protected $name = null;
    protected $gdp = null;

    public function __construct($name, $gdp)
    {
        $this->name = $name;
        $this->gdp = $gdp; 
    }

    public function getName()
    {
        return $this->name;
    }

    public function getGdp()
    {
        return round($this->gdp/1000000000);
    }
}

$countries = array();

foreach($country_names as $country_code => $country_name)
{
    $country = new country($country_name, $country_gdp[$country_code]);
    $countries[] = $country;
}

var_dump($countries);

foreach($countries as $country)
{
    echo '<li>Nominal GDP value of ' . $country->getName() . ' is $' . $country->getGdp() . '</li>';
}


var_dump($country);