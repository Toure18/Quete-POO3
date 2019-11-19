<?php


final class MotorWay extends HighWay
{
    public $nbLane = 4;
    public $maxSpeed= 130;



    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof CarsSimpson) {
            $this->setCurrentVehicle($vehicle);
            echo 'Uniquement pour les voitures';
        } else {
            echo 'Vélo, skate Interdit';
        }
    }

}