<?php

if(isset($_GET['id']) && $_GET['id']!= null){
    $id = $_GET['id'];
    require_once('classes/CRUD.php');

    $crud = new CRUD;
    $selectId = $crud->selectId('client',  $id);
    //echo $count;
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
    <title>Client Show</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Client</h1>
        <p><strong>Name:</strong><?= $name;?></p>
        <p><strong>Address:</strong><?= $address;?></p>
        <p><strong>Phone:</strong><?= $phone;?></p>
        <p><strong>Zip Code:</strong><?= $zip_code;?></p>
        <p><strong>email:</strong><?= $email;?></p>
        <a class="btn" href="client-edit.php?id=<?=$id;?>">Edit</a>
        <form action="client-delete.php" method="post">
            <input type="hidden" name="id" value="<?=$id;?>">
            <button class="btn red">Delete</button>
        </form>    
    </div>
</body>
</html>