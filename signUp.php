<?php include "core/datab.php"?>
<?php 
$email = $_POST['email'];
$password = $_POST['password'];
mysqli_query($pdo, query:"INSERT INTO `user` (`id`, `login`, `password`) VALUES (NULL, '$email', '$password')");
?>