<?php

//print_r($_GET);

// foreach($_GET as $key=>$value){
//     $$key = $value;
// }

$id = $_GET['id'];

require_once('db/connex.php');

$sql = "SELECT * FROM client WHERE id = ?";
$stmt=$pdo->prepare($sql);
$stmt->execute(array($id));

$client = $stmt->fetch();

//fettchAll() table[lig][col] array([0]=>array())

//fetch() table[col] array()

//print_r($client);

// var_dump($client);

foreach($client as $key=>$value){
    $$key = $value;
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
    </div>
</body>
</html>