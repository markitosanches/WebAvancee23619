<?php
try{
    $dbhost = 'localhost';
    $dbname = 'ecommerce';
    $dbuser = 'root';
    $dbpass = '';
    $dbport = 3306;
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname;port=$dbport;charset=utf8", $dbuser, $dbpass);
}catch (PDOException $e) {
    echo "Error : ".$e->getMessage();
    die();
}




?>