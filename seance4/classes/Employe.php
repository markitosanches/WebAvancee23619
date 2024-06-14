<?php
require_once('classes/Person.php');

class Employe extends Person{
    public float $salary;

    public function message(){
        return 'Message employe';
    }
    public function setValue($name, $phone){
        $this->name = $name;
        $this->phone = $phone;
    }
}

?>