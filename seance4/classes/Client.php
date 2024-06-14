<?php
require_once('classes/Person.php');

class Client extends Person{
    public int $account;

    // public function __construct($name, $address, $account){
    //     $this->name = $name; 
    //     $this->address = $address;
    //     $this->account=$account;
    // }

    public function message(){
        return 'Message client';
    }
    public function setPhoneClient($phone){
        $this->phone = $phone;
        
    }
    public function setValue($name, $a=null){
        $this->name = $name;

    }
}

?>