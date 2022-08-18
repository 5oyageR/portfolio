<?php
global $pdo;
$pdo = new \PDO(
    'mysql:host=127.0.0.1:3306;dbname=MainDB',
    "root",
    "root"
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec("set names utf8mb4");

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

function search ($searchString) {
    global $pdo;
    $sqlString = "SELECT * FROM projects WHERE `title` LIKE '%$searchString%' OR `theme` LIKE '%$searchString%';";
    $result = $pdo->query($sqlString);
    $projects=[];
        while($project=$result->fetch()){
            $projects[]=$project;
        }
        return $projects;
}

function getProject ($id_project){
    global $pdo;
    $sqlString = "SELECT projects.id_project, projects.title, projects.theme, projects.result,Student.name as studentName ,Student.surname as studentSurname FROM projects LEFT JOIN Student ON projects.id_student=Student.id_student WHERE projects.id_project='$id_project';";
    $result = $pdo->query($sqlString);
    if($result){
        return $result->fetch();
    } else {
        return false;
    }
}

function deleteProject ($id_project) {
    global $pdo;
    $sqlString = "DELETE FROM projects WHERE id_project='$id_project';";

    try {
        $pdo->exec($sqlString); 
        return true;
      } catch (PDOException $e) {
        print_r($e->getMessage());
        $pdo->debugDumpParams();
      }

}

function getStudents(){
    global $pdo;
    $sqlString = "SELECT * FROM Student;";
    $result = $pdo->query($sqlString);
        $students=[];
            while($student=$result->fetch()){
                $students[]=$student;
            }
            return $students;
}

function addProject($projectFields) { 
    global $pdo;

    $sqlString = "INSERT INTO projects (title,theme,result,id_student) VALUES ('{$projectFields['title']}','{$projectFields['theme']}','{$projectFields['result']}', '{$projectFields['id_student']}')";

    return $pdo->exec($sqlString);
}

function editProjectResult($project_id,$result){
    global $pdo;

        $sqlString = "UPDATE `projects` SET `result` = $result WHERE `projects`.`id_project` = $project_id;"; 
        return $pdo->exec($sqlString);
}
?>


