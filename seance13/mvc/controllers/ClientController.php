<?php
namespace App\Controllers;

use App\Models\Client;
use App\Providers\View;

class ClientController{
    public function index() {
        $client = new Client;
        $select = $client->select();
        View::render('client/index', ['clients' =>$select]);
        // print_r($select);
        //View::render('client/test', ['name'=>'peter']);
        //include 'views/client/index_old.php';
    }

    public function create() {
        View::render('client/create');
    }

    public function show($data = []){
        print_r($data);

    }
}