<?php

global $pdo;
$pdo = new \PDO(
    'mysql:host=localhost:8889;dbname=Students_Portfolio_DB',
    "root",
    "root" 
);


$res = $pdo->query('select * from search "smth" ;');
var_dump($res->fetchAll());
?>

