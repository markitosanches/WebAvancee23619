<?php
require_once('classes/CRUD.php');
$crud = new CRUD;
$select = $crud->select('client', 'name');

// print_r($select);
// die();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Index</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Client</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($select as $row){
            ?>
            <tr>
                <td><a href="client-show.php?id=<?= $row['id'];?>"><?=$row['name']; ?></a></td>
                <td><?=$row['address']; ?></td>
                <td><?=$row['phone']; ?></td>
                <td><?=$row['email']; ?></td>
                <td><a class="btn" href="client-show.php?id=<?= $row['id'];?>">Edit</a></td>
            </tr>
            <?php    
            }
            ?>
        </tbody>
    </table>
    <br><br>
    <a href="client-create.php" class="btn">New Client</a>
</body>
</html>