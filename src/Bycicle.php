<?php

require_once "../src/Vehicle.php"; //Import de parent class
use Vehicles\Vehicle; //use the namespace

 //Create class that inherits from class Vehicle and implements the given interface
class Bycicle extends Vehicle implements LightableInterface
{
    /**
     * Lights on
     * @return bool
     */
    public function switchOn(): bool
    {
        if ($this->getCurrentSpeed()>10) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Lights off
     * @return bool
     */
    public function switchOff(): bool
    {
        return false;
    }
}
