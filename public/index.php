<?php
require_once '../src/Bike.php';
require_once '../src/Car.php';
require_once '../src/Skateboard.php';
require_once '../src/Vehicle.php';
require_once '../src/LightableInterface.php';

function answerForLightVehicle($vehicle){
    $reponse = ($vehicle->getLight()) ? 'Lumières allumées' . '<br/>' : 'Lumières éteintes' . '<br/>';
    return $reponse;
}
//Test avec une voiture
$car = new Car('red', 4, 'fuel' );
echo answerForLightVehicle($car);
var_dump($car);
$car->switchOn();
echo answerForLightVehicle($car);
var_dump($car);
$car->switchOff();
echo answerForLightVehicle($car);
//Test avec un vélo
$velo = new Bike('blue', 1);
$velo->setCurrentSpeed(9);
var_dump($velo);
$velo->switchOn();
echo answerForLightVehicle($velo); //lumières éteintes car vitesse infèrieure à 10km/h
var_dump($velo);
$velo->switchOff();
$velo->setCurrentSpeed(12);
$velo->switchOn();
echo answerForLightVehicle($velo); //lumières allumées car vitesse supérieure à 10km/h
var_dump($velo);