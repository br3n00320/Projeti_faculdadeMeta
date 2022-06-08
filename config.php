<?php

$dbHost = 'LocalHost';
$dbUsername = 'root';
$dbPassword = 'breno0320';
$dbName = 'sistemaprotocolo';
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

