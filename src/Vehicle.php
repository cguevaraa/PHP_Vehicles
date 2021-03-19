<?php

namespace Vehicles;

class Vehicle
{
    //Attributes

    /**
     * The number of wheels
     * @var int
     */
    protected int $nbWheels;

    /**
     * the number of seats
     * @var int
     */
    protected int $nbSeats;

    /**
      * The color
      *@var string
      */
    protected string $color = 'grey';

    /**
     * The current speed
     * @var int
     */
    protected int $currentSpeed = 0;

    //Methods

    /**
     * Car constructor
     * @param string $color
     * @param int $nbSeats
     */
    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }

    /**
     * Move forward at a given speed
     * @param int $newSpeed
     * @return string
     */
    public function forward(int $newSpeed):string
    {
        while ($this->currentSpeed < $newSpeed) {
            $this->currentSpeed++;
        }
        
        return "Go!";
    }

    /**
     * Brake until currentSpeed is 0
     * @return string
     */
    public function brake():string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake!!";
        }
        $sentence .= "I'm stopped!";
        return $sentence;
    }

    /**
     * Get number of wheels
     * @return int
     */
    public function getNbWheels():int
    {
        return $this->nbWheels;
    }

    /**
     * Get current speed
     * @return int
     */
    public function getCurrentSpeed():int
    {
        return $this->currentSpeed;
    }

    /**
     * Get color
     * @return string
     */
    public function getColor():string
    {
        return $this->color;
    }

    /**
     * Get number of seats
     * @return int
     */
    public function getNbSeats():int
    {
        return $this->nbSeats;
    }

    /**
     * Object to string
     * @return string
     */

    public function __toString()
    {
        $message = "";
        $message .= "Vechile name: " .get_class($this) ."\n";
        $message .= "Color: " .$this->getColor() . "\n";
        $message .= "Nb of seats: " .$this->getNbSeats() . "\n";

        return $message;
    }
}
