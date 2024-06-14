<?php

class Redirect{

    static $name = 'Paul';
    
    static public function url($url){
        header('location:'.$url);
    }
}

?>