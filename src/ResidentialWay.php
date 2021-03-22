<?php

use Vehicles\Vehicle;

final class ResidentialWay extends HighWay
{
    private const NB_LANE = 2;
    private const MAX_SPEED = 50;
    
    /**
     * PedestrianWay constructor
     */
    public function __construct()
    {
        $this->setNbLane(self::NB_LANE);
        $this->setMaxSpeed(self::MAX_SPEED);
    }

    /**
     * Add an allowed vehicle (all types allowed)
     * @param Vehicle
     */
    public function addVehicle(Vehicle $vehicle)
    {
        $this->currentVehicles = $vehicle;
    }
}
