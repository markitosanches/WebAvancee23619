<?php

if(isset($_GET['id']) && $_GET['id']!= null){
    $id = $_GET['id'];
    require_once('classes/CRUD.php');
    $crud = new CRUD;
    $selectId = $crud->selectId('client',  $id);

    if($selectId){       
        foreach($selectId as $key=>$value){
            $$key = $value;
        }
    }else{
        header('location:client-index.php');
        exit;
    }  
}else{
    header('location:client-index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Create</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <form action="client-update.php" method="post">
            <input type="hidden" name="id" value="<?= $id;?>">
            <h2>Edit Client</h2>
            <label>Name
                <input type="text" name="name" value="<?= $name;?>">
            </label>
            <label>Address
                <input type="text" name="address" value="<?= $address;?>">
            </label>
            <label>Phone
                <input type="text" name="phone" value="<?= $phone;?>">
            </label>
            <label>Zip Code
                <input type="text" name="zip_code" value="<?= $zip_code;?>">
            </label>
            <label>Email
                <input type="email" name="email" value="<?= $email;?>">
            </label>
            <input type="submit" class="btn" value="Save">
        </form>
    </div>
</body>
</html>