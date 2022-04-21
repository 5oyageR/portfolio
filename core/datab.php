<?php

global $pdo;
$pdo = new \PDO(
    'mysql:host=localhost:8889;dbname=portfolioSite',
    "root",
    "root" 
);


$res = $pdo->query('select * from search "smth" ;');
var_dump($res->fetchAll());
?>

