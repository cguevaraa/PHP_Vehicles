<?php

use Vehicles\Vehicle;

abstract class HighWay
{
    //PROPERTIES
    
    /**
     * Current vehicles
     *
     * @var array
     */
    protected array $currentVehicles;

    /**
     * Number of lanes
     *
     * @var int
     */
    protected int $nbLane;

    /**
     * Max speed
     *
     * @var int
     */
    protected int $maxSpeed;

    //METHODS

    /**
     * Add vehicle
     *
     * @param Vehicle
     */
    abstract public function addVehicle(Vehicle $vehicle);

    /**
     * Get current vehicles
     *
     * @return  array
     */
    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }

    /**
     * Set current vehicles
     *
     * @param  array  $currentVehicles  Current vehicles
     *
     * @return  self
     */
    public function setCurrentVehicles(array $currentVehicles)
    {
        $this->currentVehicles = $currentVehicles;

        return $this;
    }

    /**
     * Get number of lanes
     *
     * @return  int
     */
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * Set number of lanes
     *
     * @param  int  $nbLane  Number of lanes
     *
     * @return  self
     */
    public function setNbLane(int $nbLane)
    {
        $this->nbLane = $nbLane;

        return $this;
    }

    /**
     * Get max speed
     *
     * @return  int
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * Set max speed
     *
     * @param  int  $maxSpeed  Max speed
     *
     * @return  self
     */
    public function setMaxSpeed(int $maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }
}
