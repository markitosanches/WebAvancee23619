<?php

abstract class Person{
    public string $name; 
    public string $address; 
    protected string $phone; 
    public string $country; 
    private string $language; 

    abstract public function message();

    abstract public function setValue($a, $b);

   final public function __construct($name, $address){
        $this->name = $name; 
        $this->address = $address; 
    }

    final public function setPhone($phone){
        $this->phone = $phone;
    }
}


?>