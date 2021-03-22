<?php

use Vehicles\Vehicle;

final class PedestrianWay extends HighWay
{
    private const NB_LANE = 1;
    private const MAX_SPEED = 10;
    /**
     * PedestrianWay constructor
     */
    public function __construct()
    {
        $this->setNbLane(self::NB_LANE);
        $this->setMaxSpeed(self::MAX_SPEED);
    }

    /**
     * Add an allowed vehicle (Bycicle or Skateboard)
     * @param Vehicle
     */
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bycicle || $vehicle instanceof Skateboard) {
            $this->currentVehicles = $vehicle;
        }
    }
}
