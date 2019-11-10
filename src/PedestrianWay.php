<?php

class PedestrianWay extends HighWay

{
    /**
     * Motorway constructor.
     */
    public function __construct()
    {
        $this->nbLane = 1;
        $this->maxSpeed = 10;
    }
    public function addVehicule(object $vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard){
            $this -> currentVehicles[] = $vehicle;
        }
    }
}