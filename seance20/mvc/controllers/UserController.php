<?php
namespace App\Controllers;

use App\Models\User;
use App\Models\Privilege;
use App\Providers\View;
use App\Providers\Validator;
use App\Providers\Auth;

class UserController{

    public function __construct(){
        Auth::session();
    }
    public function create(){
        if($_SESSION['privilege_id']==1){
            $privilege = new Privilege;
            $privileges = $privilege->select('privilege');
            View::render('user/create', ['privileges'=>$privileges]);
        }else{
            return View::redirect('login');
        }
        
    }

    public function store($data){
        Auth::session();
        $validator = new Validator;
        $validator->field('name', $data['name'])->min(2)->max(50);
        $validator->field('username', $data['username'])->email()->required()->max(50)->isUnique('User');
        $validator->field('password', $data['password'])->min(5)->max(20);
        $validator->field('email', $data['email'])->email()->required()->max(50)->isUnique('User');
        $validator->field('privilege_id', $data['privilege_id'], 'privilege')->required()->isExist('Privilege');

        if($validator->isSuccess()){
            $user = new User;
            $data['password'] = $user->hashPassword($data['password']);
            $insert = $user->insert($data);
            if($insert){
                return View::redirect('login');
            }else{
                return View::render('error');
            }
        }else{
            $errors = $validator->getErrors();
            //print_r($data);
            //print_r($errors);
            $privilege = new Privilege;
            $privileges = $privilege->select('privilege');
            return View::render('user/create', ['errors'=>$errors, 'user'=>$data, 'privileges'=>$privileges]);
        }
    }
}