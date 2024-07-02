<?php

//print_r($_POST);

require_once('classes/CRUD.php');

$crud = new CRUD;
$id = $_POST['id'];
$delete = $crud->delete('client',$id);
if($delete){
    header('location: client-index.php');
   // header('location: '.$_SERVER['HTTP_REFERER']);
}else{
    echo 'error';
};