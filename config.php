<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'admin';
$dbName = 'sistema';
$dbPort = 3306; 

$conexao = mysqli_connect ($dbHost,$dbUsername,$dbPassword,$dbName,$dbPort);


// new mysqli
// if($conexao->connect_errno)
// {

//     echo "erro";
// }
// else{

//    echo "ok";
// }
?>

