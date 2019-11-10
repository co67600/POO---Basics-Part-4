<?php

use Interfaces\LightableInterface;

require_once 'Vehicle.php';

class Truck extends Vehicle implements LightableInterface
{
    /**
     * @var int
     */
    private $storageCapacity;

    private $loading;

    /**
     * Truck constructor.
     * @param int $storageCapacity
     * @param $loading
     */
    public function __construct(string $color, int $nbSeats, int $storageCapacity, int $loading)
    {
        parent::__construct($color, $nbSeats);
        $this->storageCapacity = $storageCapacity;
        $this->loading = $loading;
    }

    /**
     * Truck constructor.
     * @param int $storageCapacity
     * @param $loading
     */



    /**
     * @return int
     */
    public function getStorageCapacity()
    {
        return $this->storageCapacity;
    }


    /**
     * @param int $storageCapacity
     */
    public function setStorageCapacity($storageCapacity)
    {
        $this->storageCapacity = $storageCapacity;
    }



    /**
     * @return mixed
     */
    public function getLoading()
    {
        return $this->loading;
    }

    /**
     * @param mixed $loading
     */
    public function setLoading($loading)
    {
        $this->loading = $loading;
    }


    public function charge(): string
    {
        $chargement = " ";
        if ($this->loading >= $this->storageCapacity) {
            $chargement = "full";
        }
        else {
            $chargement .= "in filling";
        }
        return $chargement;
    }


}
