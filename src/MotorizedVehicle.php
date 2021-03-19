<?php

require_once "../src/Vehicle.php"; //Import parent class
use Vehicles\Vehicle; //use the class from the namespace Vehicles

class MotorizedVehicle extends Vehicle
{
    //Attributes

    const ALLOWED_ENERGIES = ['electric', 'fuel'];

    /**
     * The energy source
     * @var string
     */
    private string $energy;

    /**
     * The energy level
     * @var int
     */
    private int $energyLevel;

    //Methods

    /**
     * MotorizedVehicle constructor
     * @param string $color
     * @param int $nbSeats
     * @param string $energy
     */
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        // set energy to 'fuel' par default
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        } else {
            $this->energy = 'fuel';
        }
    }

    /**
     * Get $energy
     * @return string
     */
    public function getEnergy():string
    {
        return $this->energy;
    }

    /**
     * Get $energyLevel
     * @return int
     */
    public function getEnergyLevel():int
    {
        return $this->energyLevel;
    }

    /**
     * Object to string
     * @return string
     */

    public function __toString()
    {
        $message = parent::__toString();
        $message .= "Energy source: " .$this->getEnergy() . "\n";

        return $message;
    }
}
