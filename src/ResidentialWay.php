<?php

class ResidentialWay extends HighWay
{
    /**
     * Motorway constructor.
     */
    public function __construct()
    {
        $this->nbLane = 2 ;
        $this->maxSpeed = 50;
    }

    public function addVehicule(object $vehicle)
    {
        if ($vehicle instanceof Vehicle){
            $this -> currentVehicles[] = $vehicle;
        }
    }
}