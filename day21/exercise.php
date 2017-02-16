<?php
class car
{
    private $color = null;
    private $manufacturer = "Skoda";
    public $model = null;
    public $price = null;
    public $nr_of_wheels = 4;
    public $fuel_type = 'petrol';
    public $tire_type = null;
    public $owner = 'manufacturer';
    public $current_speed = 0;

    public function speed_up()
    {
        $this->current_speed += 10;
    }

    public function brake()
    {
        $this->current_speed -= 10;
    }

    public function get_stolen()
    {
        $this->owner = 'chop-shop';
    }

    public function be_bought($new_owner)
    {
        $this->owner = $new_owner;
    }

     /* get method for the manufacturer property */
    public function getManufacturer()
    {
       return $this->manufacturer;
    }

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function setManufacturer($manufacturer)
    {
        return $this->manufacturer = $manufacturer;
    }
}

// no car was made yet

$new_car = new car('KUGA'); // new car created
/*$new_car->manufacturer = 'Skoda';*/
// $new_car->model = 'Favorit';
echo $new_car->getManufacturer();
$new_car->setManufacturer('fiat');
echo $new_car->getManufacturer();
$new_car->price = 400000; // the car is given a price
$new_car->price = 1000000;  // car is on sale
$new_car->be_bought('OG'); // I buy the car
$new_car->speed_up();
$new_car->speed_up();
$new_car->speed_up();
$new_car->speed_up(); // I sped up to 40

$new_car->brake();
$new_car->brake();
$new_car->brake();
$new_car->brake(); // stopped

$new_car->get_stolen();

$new_car->nr_of_wheels = 0; // wheels are chopped of

echo $new_car->model;

// exercises OOP2

class vehicle 
{
    public $wheels_count;
    public $color;
    public $avg_speed;
    
    public function
}