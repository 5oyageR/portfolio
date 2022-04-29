<?php
global $pdo;
$pdo = new \PDO(
    'mysql:host=localhost:8889;dbname=Students_Portfolio_DB',
    "root",
    "root" 
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 //$res = $pdo->query('select * from users "email" ;');
 //var_dump($res->fetchAll());
 function saveUser($email,$password){
    global $pdo;

    $sqlString = "INSERT INTO user (login,password) VALUES ('$email','$password')";

    return $pdo->exec($sqlString);
 }
?>


