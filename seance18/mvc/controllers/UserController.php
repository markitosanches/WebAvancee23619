<?php
namespace App\Controllers;

use App\Models\User;
use App\Models\Privilege;
use App\Providers\View;
use App\Providers\Validator;

class UserController{
    public function create(){
        $privilege = new Privilege;
        $privileges = $privilege->select('privilege');
        View::render('user/create', ['privileges'=>$privileges]);
    }

    public function store($data){
        $validator = new Validator;
        $validator->field('name', $data['name'])->min(2)->max(50);
        $validator->field('username', $data['username'])->email()->required()->max(50);
        $validator->field('password', $data['password'])->min(5)->max(20);
        $validator->field('email', $data['email'])->email()->required()->max(50);
        $validator->field('privilege_id', $data['privilege_id'], 'privilege')->required();

        if($validator->isSuccess()){

            echo 'Success';
        }else{
            $errors = $validator->getErrors();

            print_r($errors);
        }
    }
}