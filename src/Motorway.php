<?php

final class Motorway extends HighWay
{


    /**
     * Motorway constructor.
     */
    public function __construct()
    {
        $this->nbLane = 4;
        $this->maxSpeed = 130;
    }

    public function addVehicule(object $vehicle)
    {
        if ($vehicle instanceof Car){
            $this -> currentVehicles[] = $vehicle;
        }
    }
}