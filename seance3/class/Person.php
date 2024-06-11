<?php

class Person{
    private string $name;
    public $address;
    public $zipCode = 'H1H1H1';
    public string $phone;
    public $email;
    public int $integer;
    public float $float;
    public bool $boolean;


    public function __construct(string $name, $address, $zipCode, string $phone, $email = 'a@a'){
        $this->name = $name;
        $this->address = $address;
        if($zipCode == null){
            $this->zipCode;
        }else{
            $this->zipCode = $zipCode;
        }
        
        $this->phone = $phone;
        $this->email = $email;
    }

    public function __destruct(){
       echo "Name: ".$this->name."<br>Address: ".$this->address."<br>Zip Code: ".$this->zipCode."<br>Phone: ".$this->phone."<br>Email: ".$this->email;
    }

    public function setName(string $name): void{
        $this->name = $name;
    }

    public function getName(): string{
        return $this->name;
    }

    public function setPerson(string $name, $address, $zipCode, string $phone, $email = 'a@a'): void{
        $this->name = $name;
        $this->address = $address;
        $this->zipCode = $zipCode;
        $this->phone = $phone;
        $this->email = $email;
    }

    public function getPerson(): string{
        return "Name: ".$this->name."<br>Address: ".$this->address."<br>Zip Code: ".$this->zipCode."<br>Phone: ".$this->phone."<br>Email: ".$this->email;
    }

    public function magic(){
        echo  " The class name is <b>" . __CLASS__ . "</b><br>";
        echo " The line number is " . __LINE__."<br>";
        echo " The file is located at " . __FILE__."<br>";
        echo " The method is called " . __METHOD__."<br>";
    }
}

?>