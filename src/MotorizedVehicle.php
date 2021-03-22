<?php

require_once "../src/Vehicle.php"; //Import parent class
use Vehicles\Vehicle; //use the class from the namespace Vehicles

class MotorizedVehicle extends Vehicle
{
    //PROPERTIES

    const ALLOWED_ENERGIES = ['electric', 'fuel'];

    /**
     * The energy source
     *
     * @var string
     */
    private string $energy;

    /**
     * The energy level
     *
     * @var int
     */
    protected int $energyLevel;

    /**
     * Park brake state
     *
     * @var bool
     */
    protected bool $hasParkBrake;

    //METHODS

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
     * Start
     *
     * @param bool $hasParkBrake
     */

    public function start(bool $hasParkBrake)
    {
        if ($hasParkBrake) {
            throw new Exception("The " .get_class($this) ." has the park brake on!");
        } else {
            echo "\nGo!\n";
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
     * Set park brake
     *
     * @param bool $hasParkBrake
     *
     */
    public function setParkBrake(bool $hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
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
