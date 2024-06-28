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

$sql = "DELETE FROM client WHERE id = ?" ;
$stmt = $pdo->prepare($sql);
$stmt->execute(array($id));

header('location:client-index.php');
