<?php

$host = "infornet.com.br";
$user = "infor430_david";
$password = "";
$database = "infor430_php_davidson";


try {
    $mysqli = new mysqli($host, $user, $password, $database);
} catch (Exception $e) {
    echo 'Exceção capturada: ',  $e->getMessage(), "\n";
}


?>