<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';
class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = [
        "fuel",
        "electric",
    ];
    /**
     * @var bool
     */
    protected $light = false;
    /**
     * @var string
     */
    private $energy;
    /**
     * @var int
     */
    private $energyLevel;
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setNbWheels(4);
    }
    /**
     * @return bool
     */
    public function switchOn(): bool
    {
        return $this->light = true;
    }
    /**
     * @return bool
     */
    public function switchOff(): bool
    {
        return $this->light = false;
    }
    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }
    /**
     * @param string $energy
     * @return Car
     */
    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
    /**
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    /**
     * @param int $energyLevel
     */
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    /**
     * @return bool
     */
    public function getLight(): bool
    {
        return $this->light;
    }
}