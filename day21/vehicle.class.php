
<?php

class vehicle 
{
    protected $wheels_count = null;
    protected $color = null;
    public $avg_speed = null;
    
    public function travel($distance) //calculates how long does it take to travel the distance
    {
        $avg_speed = max(1, $this->avg_speed); // returns bigger value of 1 and $this->avg_speed, abysme nedělili nulou
        return $distance / $avg_speed; 
        
    }
}