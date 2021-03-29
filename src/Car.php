<?php

require_once "../src/MotorizedVehicle.php"; //Import the parent class
//use Vehicles\Vehicle; //use the namespace

class Car extends MotorizedVehicle implements LightableInterface
{
    /**
     * Lights on
     * @return bool
     */
    public function switchOn(): bool
    {
        return true;
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
