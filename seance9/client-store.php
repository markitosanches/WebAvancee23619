<?php
///print_r($_POST);

require_once('classes/CRUD.php');

$crud = new CRUD;

$insert = $crud->insert('client', $_POST);

header('location:client-show.php?id='.$insert);


