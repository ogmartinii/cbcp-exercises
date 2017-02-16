<?php
class car extends vehicle
{
    protected $wheels_count = 4;
    
    public function change_color($new_color) {

    $this->color = $new_color;
    }
}
