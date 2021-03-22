<?php

require_once "../src/MotorizedVehicle.php"; //Import parent class
//use Vehicles\Vehicle; //use the namespace

final class Truck extends MotorizedVehicle
{
    //Attributes

    /**
     * Charge capacity
     * @var int
     */
    private int $chargeCapacity;

    /**
     * Current charge
     * @var int
     */
    private int $currentCharge;

    //Methods

    /**
     * Truck's constructor
     * @param int $chargeCapacity
     */
    public function __construct(string $color, int $nbSeats, string $energy, int $chargeCapacity)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->chargeCapacity = $chargeCapacity;
        $this->currentCharge = 0;
    }

    /**
    *Is full?
    *@return string
    */
    public function isFull():string
    {
        if ($this->getCurrentCharge() >= $this->getChargeCapacity()) {
            return 'full';
        } else {
            return 'filling';
        }
    }

    /**
     * Get charge capacity
     *
     * @return  int
     */
    public function getChargeCapacity():int
    {
        return $this->chargeCapacity;
    }

    /**
     * Set charge capacity
     *
     * @param  int  $chargeCapacity  Charge capacity
     *
     * @return  self
     */
    public function setChargeCapacity(int $chargeCapacity)
    {
        $this->chargeCapacity = $chargeCapacity;

        return $this;
    }

    /**
     * Get current charge
     *
     * @return  int
     */
    public function getCurrentCharge()
    {
        return $this->currentCharge;
    }

    /**
     * Set current charge
     *
     * @param  int  $currentCharge  Current charge
     *
     * @return  self
     */
    public function setCurrentCharge(int $currentCharge)
    {
        $this->currentCharge = $currentCharge;

        return $this;
    }

    /**
     * Object to string
     * @return string
     */

    public function __toString()
    {
        $message = parent::__toString();
        $message .= "Charge capacity " .$this->getChargeCapacity() . "\n";
        $message .= "Current charge " .$this->getCurrentCharge() . "\n";

        return $message;
    }
}
