<?php

require_once 'Car.php';
require_once 'Bicycle.php';

$car1 = new Car('yellow', '4', 'petrol');

$car1->getCurrentSpeed(50);
$car1->getEnergyLevel(15);
echo $car1->forward();
echo $car1->brake();

$bike1 = new Bicycle('red');
$bike1->setCurrentSpeed(10);
echo $bike1->forward();
echo $bike1->brake();
