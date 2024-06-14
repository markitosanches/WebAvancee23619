<?php

require_once('classes/Employe.php');
require_once('classes/Client.php');

$paul = new Employe('Paul', 'Sherbrooke');

var_dump($paul);



$lisa = new Client('Lisa', 'Maisonneuve',10);

$lisa->setPhoneClient("514-777-7777");
$lisa->test = "testkkjkkk";

var_dump($lisa);


?>