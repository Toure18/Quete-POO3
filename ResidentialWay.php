<?php


final class ResidentialWay extends HighWay
{
    public $nbLane=1;
    public $maxSpeed=10;



    public function addVehicle(Vehicle $allVehicle)
    {
        if ($allVehicle instanceof Vehicle) {
            $this->setCurrentVehicle($allVehicle);
            echo 'Tout types de véhicule';
        }
    }
}