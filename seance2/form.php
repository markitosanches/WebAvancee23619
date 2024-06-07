<?php

// print_r($_POST);
// echo "<br>";
// var_dump($_POST);
// echo "<br>";
// echo $_POST['prenom'];

// function myFunc($a){
//     return "Je m`appele ".$a;
// }
// echo myFunc($_POST['prenom']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>form</h1>
    <form action="test.php" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="prenom" id="nom">
        <label for="age">Age</label>
        <input type="text" name="age" id="age">
        <input type="submit">

    </form>
    
</body>
</html>