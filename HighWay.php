<?php


 abstract class HighWay
{   /**
    * @var array
    */
    protected $currentVehicle=[];
    /**
     * @var int
     */
    protected $nbLane;
    /**
     * @var int
     */
    protected $maxSpeed;

    /**
     * @return array
     */


     public function getCurrentVehicle(): array
    {
        return $this->currentVehicle;
    }

    /**
     * @param array $currentVehicle
     * @return HighWay
     */
    public function setCurrentVehicle($currentVehicle)
    {
        $this->currentVehicle[] = $currentVehicle;
        return $this;
    }

    /**
     * @return int
     */
    public function getnbLane(): int
    {
        return $this->nbLane;
    }

    /**
     * @param int $nbLane
     * @return HighWay
     */
    public function setnbLane(int $nbLane): HighWay
    {
        $this->nbLane = $nbLane;

    }

    /**
     * @return int
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

abstract public function addVehicle(Vehicle $vehicle);

}