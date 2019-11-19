<?php


final class PedestrianWay extends HighWay
{
    protected $nbLane=2;
    protected $maxSpeed=50;


   public function addVehicle(Vehicle $notVehicle)
   {
       if ($notVehicle instanceof Bicycle ){
           $this->setCurrentVehicle($notVehicle);
           echo 'Vélo autoriser';
       } else {
           echo ' Voiture Interdit';
       }
   }
}