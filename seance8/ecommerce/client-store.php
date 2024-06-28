<?php
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location:client-index.php');
    exit;
}

require_once('db/connex.php');
//print_r($_POST);
//echo "<br>";

foreach($_POST as $key=>$value){
    //echo $key." = ".$value."<br>";
    $$key = $value;
}

// $name = $_POST['name'];
// $address = $_POST['address'];
// $zip_code = $_POST['zip_code'];
// $phone = $_POST['phone'];
// $email = $_POST['email'];

$sql = "INSERT INTO client(name, address, phone, zip_code, email) values(?,?,?,?,?)";
$stmt = $pdo->prepare($sql);
if($stmt->execute(array($name, $address, $phone, $zip_code, $email))){
    $id = $pdo->lastInsertId();
    header('location:client-show.php?id='.$id);
}else{
    print_r($stmt->errorInfo());
}


?>