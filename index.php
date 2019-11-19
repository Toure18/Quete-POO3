<?php
require_once 'CarsSimpson.php';
require_once 'Bicycle.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

/*$bicycle = new Bicycle('blue', 1, 4);
echo $bicycle->forward();
var_dump($bicycle);*/

$car = new CarsSimpson('green', 4, 4, 'electric');
$bicycle = new Bicycle('red', 1, 2);
/*echo $car->forward();
var_dump($car);

$truck = new Truck('white', 2, 4, 'electric', 200);
echo $truck->forward();
echo $truck->brake();
echo '<br>';
$truck->setcargo(201);
echo $truck->isFull();
var_dump($truck);
*/



$autoroute = new MotorWay();
$autoroute->addVehicle($car);
echo '<br>';
$autoroute->addVehicle($bicycle);
echo '<br>';


$voieVélo = new PedestrianWay();
$voieVélo->addVehicle($bicycle);
echo '<br>';
$voieVélo->addVehicle($car);
echo '<br>';


$ville = new ResidentialWay();
$ville->addVehicle($bicycle);
echo '<br>';
$ville->addVehicle($car);
echo '<br>';



