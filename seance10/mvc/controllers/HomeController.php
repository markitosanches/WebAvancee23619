<?php
class HomeController{
    public function index(){
        //echo 'Home Controller';
        $data = "Salut un example de MVC";
        include('views/home.php');
    }

    public function test(){
        echo 'test';
    }
}

?>