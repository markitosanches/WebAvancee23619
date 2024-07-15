<?php
namespace App\Controllers;

use App\Models\Client;
use App\Providers\View;
use App\Providers\Validator;

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
        // print_r($data);
        // echo $data['id'];
        // die();
        if(isset($_GET['id']) && $data['id']!=null){
            $client = new Client;
            $selectId = $client->selectId($data['id']);
            if($selectId){
                return View::render('client/show', ['client'=>$selectId]);
            }else{
                return View::render('error');
            }

        }else{
            return View::render('error', ['msg'=>'Client not found!']);
        }    
    }

    public function edit($data = []){
        if(isset($_GET['id']) && $data['id']!=null){
            $client = new Client;
            $selectId = $client->selectId($data['id']);
            if($selectId){
                return View::render('client/edit', ['client'=>$selectId]);
            }else{
                return View::render('error');
            }
        }else{
            return View::render('error');
        }    
    }

    public function store($data=[]){

       $validator = new Validator;
       $validator->field('name', $data['name'])->min(3)->max(45);
       $validator->field('address', $data['address'])->max(45);
       $validator->field('phone', $data['phone'])->max(20);
       $validator->field('zip_code', $data['zip_code'], 'zip code')->max(10);
       $validator->field('email', $data['email'])->required()->email()->max(45);
        //var_dump($validator);
        // die();
       if($validator->isSuccess()){
            // echo 'Success';
            // die();
            $client = new Client;
            $insert = $client->insert($data);
            
            if($insert){
                return View::redirect('client/show?id='.$insert);
            }else{
                return View::render('error');
            }
       }else{
            $errors = $validator->getErrors();
            // print_r($errors);
            // die();
            return View::render('client/create', ['errors'=>$errors, 'client'=>$data]);
       }




    }
}