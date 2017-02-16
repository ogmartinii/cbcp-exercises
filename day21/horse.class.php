<?php

class horse extends vehicle
{
    protected $wheels_count = 0;
    protected $is_fed = false;

    public function feed()
    {
        $this->is_fed = true;
    }
}