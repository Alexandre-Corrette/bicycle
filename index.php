<?php
// index.php

require_once 'Bicycle.php';
$bike = new Bicycle();
var_dump($bike);
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();

require_once 'Cars.php';
$blueCar = new Car('blue', '4', 'Fuel');
$blueCar->getCurrentSpeed(0);
var_dump($blueCar);
echo $blueCar->forward();
$blueCar->setEnergyLevel(5);
echo $blueCar->stopTheCar();

require_once 'Truck.php';
$truck= new Truck('white', '3', 'Fuel', '100');
$truck->getCurrentSpeed(50);
echo $truck->forward();
$truck->setEnergyLevel(15);
echo $truck->stopTheCar();
$truck->setActualStorage(55);

