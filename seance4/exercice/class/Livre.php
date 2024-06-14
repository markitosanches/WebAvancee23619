<?php

class Livre {
    public string $isbn;
    public string $titre;
    public string $datePublication;
    public string $genre;
    public float $prix;
    public string $description;
    public float $cout;
    private float $marge;

    public function __construct($titre, $prix, $cout){
        $this->titre = $titre;
        $this->prix = $prix;
        $this->cout = $cout;
        $this->calculMarge();
        
    }

    private function calculMarge():void{
        
        $this->marge = $this->prix - $this->cout;

    }
}


?>