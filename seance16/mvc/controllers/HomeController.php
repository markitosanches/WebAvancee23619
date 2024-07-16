<?php
namespace App\Controllers;

use App\Models\ExampleModel;

class HomeController{
    public function index(){
        //echo 'Home Controller';
        $model = new ExampleModel;
        $data = $model->getData();
        include('views/home.php');
    }

    public function test(){
        echo 'test';
    }
}

?>