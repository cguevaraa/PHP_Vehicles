<?php

use Vehicles\Vehicle;

final class MotorWay extends HighWay
{
    private const NB_LANE = 4;
    private const MAX_SPEED = 130;
    /**
     * MotorWay constructor
     */
    public function __construct()
    {
        $this->setNbLane(self::NB_LANE);
        $this->setMaxSpeed(self::MAX_SPEED);
    }

    /**
     * Add an allowed vehicle (Car)
     * @param Vehicle
     */
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car) {
            $this->currentVehicles = $vehicle;
        }
    }
}
