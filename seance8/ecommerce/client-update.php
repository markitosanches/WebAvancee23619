<?php
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location:client-index.php');
    exit;
}

require_once('db/connex.php');

//print_r($_POST);
foreach($_POST as $key=>$value){
    $$key = $value;
}

$sql = "UPDATE client SET name = ?, address = ?, phone = ?, zip_code = ?, email = ? WHERE id = ?" ;
$stmt = $pdo->prepare($sql);
$stmt->execute(array($name, $address,$phone, $zip_code, $email, $id));

header('location:client-index.php');
