<?php
require_once('classes/Person.php');

$peter = new Person('Peter', 'Sherbrooke');

$peter->setPhone("514-77777777");
var_dump($peter);


?>