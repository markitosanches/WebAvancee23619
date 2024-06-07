<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seance 2</title>
</head>
<body>
    Salut
    <?php 
        $name = $_POST['prenom'];
        $age = 10;
        //echo $name."<br>".$age;
        function myFunc($a){
            return "Je m`appele ".$a;
        }
        echo myFunc($name);

    ?>
</body>
</html>