<?php
require_once 'Vehicle.php';

class Bicycle extends Vehicle
{
}


/*class Bicycle {
//Les propriétés du bicycle
    private $color;
    private $currentSpeed;
    private $nbSeat = 1;
    private $nbWheels =2;
// Les méthodes du vélos (Modifier les paramètres du vélo

    public function getColor(): string
    {
        return $this->color='blue';
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed = 1;
    }


    public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
}*/