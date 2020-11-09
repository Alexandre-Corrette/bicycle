<?php
// index.php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Truck.php';

$bike = new Bicycle('red', '1', 'man');
var_dump($bike);
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();


$blueCar = new Car('blue', '4', 'Fuel');
$blueCar->setCurrentSpeed(130);
var_dump($blueCar);
echo $blueCar->forward();
$blueCar->setEnergyLevel(5);
echo $blueCar->stopTheCar();


$truck= new Truck('white', '3', 'Fuel', '100');
$truck->setCurrentSpeed(50);
echo $truck->forward();
$truck->setEnergyLevel(15);
echo $truck->stopTheCar();
$truck->setActualStorage(55);

$motorWay = new MotorWay();
$motorWay->setNbLane(4);
$motorWay->setMaxSpeed(130);
$motorWay->addVehicle(new Car('blue', '4', 'Fuel'));
var_dump($motorWay);

$blueCar->setParkBrake(true);
var_dump($blueCar);
try 
{
    echo $blueCar->start();
}
catch(Exception $e)
{
    echo"Exception received: ". $e->getMessage(). "<br>";
    $blueCar->setParkBrake(false);
}
finally 
{
    echo "My car is rolling like a donut";
}
var_dump($blueCar);
