<?php
require_once 'Car.php';
require_once 'Bmw.php';
require_once 'Ferrari.php';

echo "<pre>";

$bmw = new Bmw();
var_dump($bmw);
$bmw->autopilot();
var_dump($bmw);

var_dump($bmw->getCurrentSpeed());


$ferrari = new Ferrari();
var_dump($ferrari);
$ferrari->autopilot();
var_dump($ferrari);

var_dump($ferrari->getCurrentSpeed());


