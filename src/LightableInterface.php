<?php

interface LightableInterface
{
    //Methods to implement within the
    //Vehicles with switchable lights

    /**
     * Switch on
     */
    public function switchOn();
    /**
     * Switch off
     */
    public function switchOff();
}
