<?php
namespace App\Models;
use App\Models\CRUD;

class User extends CRUD{
    protected $table = "user";
    protected $primaryKey = "id";
    protected $fillable = ['name', 'username', 'password', 'email', 'privilege_id'];
    private $salt = "H4@1&";

    public function hashPassword($password, $cost = 10){
        $options = [
            'cost' => $cost
        ];
        
        return password_hash($password.$this->salt, PASSWORD_BCRYPT, $options);
    }

}