<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class CarsSimpson extends Vehicle implements LightableInterface
{
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    public function __construct(string $color, int $nbSeats,int $nbWheels, string $energy)
    {
        parent::__construct($color, $nbSeats, $nbWheels );
        $this->energy = $energy;
    }


    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function switchOn()
    {
        return 'Car : true';
    }

    public function switchOff()
    {
        return 'Car : false';
    }
}
