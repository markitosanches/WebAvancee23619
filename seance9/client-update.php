<?php

//print_r($_POST);

require_once('classes/CRUD.php');

$crud = new CRUD;

$update = $crud->update('client', $_POST);

if($update){
    header('location: client-index.php');
   // header('location: '.$_SERVER['HTTP_REFERER']);
}else{
    echo 'error';
};