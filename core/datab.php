<?php
global $pdo;
$pdo = new \PDO(
    'mysql:host=localhost:8889;dbname=MainDB',
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
 function getUser($email){
     global $pdo;
     $sqlString = "SELECT * FROM user WHERE `login`='$email';";
     $result = $pdo->query($sqlString);
     if($result){
         return $result->fetch();
     } else {
         return false;
     }
 }
 function getUsers(){
    global $pdo;
    $sqlString = "SELECT * FROM user;";
    $result = $pdo->query($sqlString);
        $users=[];
            while($user=$result->fetch()){
                $users[]=$user;
            }
            return $users;
}
function countUsers(){
    global $pdo;
    $sqlString = "SELECT count(*) FROM user;";
    $result = $pdo->query($sqlString);
        if($result){
            return $result->fetch()[0];

        } else {
            return 0;
        }
}

?>


