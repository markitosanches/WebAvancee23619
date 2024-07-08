<?php
namespace App\Controllers;

use App\Models\Client;

class ClientController{
    public function index() {
        $client = new Client;
        $select = $client->select();

        print_r($select);
        
        //include 'views/client/index.php';
    }
}