<?php

include_once('class/Person.php');

$student = new Person('Paul', 'Pie IX', 'hahah', '438-777-8888', 'paul@gmail.com');
// $student->integer = 1.2;
// $student->float = 1.5;
// $student->boolean = 'abc';
//$student->name = "Peter";
//echo $student->name;
//$student->zipCode = "H2H2H2";

 $student->setName('Peter');

 $student->magic();
 echo "<br>";
//echo $student->getName();


// $student->setPerson('Paul', null, '', '438-777-8888');

// echo $student->getPerson();

//var_dump($student);


?>