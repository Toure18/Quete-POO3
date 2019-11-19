<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    private $cargoCapacity;
    private $cargo;
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */


    public function __construct( string $color, int $nbSeats,int $nbWheels, string $energy, int $cargoCapacity, int $cargo=0 )
    {
       parent::__construct($color, $nbSeats,$nbWheels);
        $this->energy = $energy;
        $this->cargoCapacity = $cargoCapacity;
        $this->cargo = $cargo;
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

    public function setcargo(int $cargo): void
    {
        $this->cargo = $cargo;
    }

   public function isFull(){
        if($this->cargo>= $this->cargoCapacity){
            $this->cargo = $this->cargoCapacity;
            return'full';
        }
        else {
            return 'In filling';
        }
   }


}
