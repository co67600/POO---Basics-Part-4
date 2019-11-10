<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';
class Bike extends Vehicle implements LightableInterface
{
    /**
     * @var bool
     */
    protected $light = false;
    public function __construct(string $color, int $nbSeats)
    {
        parent::__construct($color, $nbSeats);
        $this->setNbWheels(2);
    }
    /**
     * @return bool
     */
    public function switchOn(): bool
    {
        $return = ($this->getCurrentSpeed() > 10) ? $this->light = true : $this->light = false;
        return $return;
    }
    /**
     * @return bool
     */
    public function switchOff(): bool
    {
        return $this->light = false;
    }
    /**
     * @return bool
     */
    public function getLight(): bool
    {
        return $this->light;
    }
}