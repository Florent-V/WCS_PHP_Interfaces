<?php 

require './Vehicle.php';
require './Bicycle.php';
require './Car.php';
require './Truck.php';
require_once './LightableInterface.php';

echo 'Creation d\'un véhicule' . '<br>';
$car = new Car('blue', 4, 'gasoline');
var_dump($car);

echo $car->switchOn() . '<br>';

echo 'Creation d\'un vélo' . '<br>';
$velo = new Bicyle('blue', 1);
var_dump($velo);

$velo->setCurrentSpeed(5);

echo $velo->switchOn() . '<br>';

$velo->setCurrentSpeed(15);

echo $velo->switchOn() . '<br>';







?>