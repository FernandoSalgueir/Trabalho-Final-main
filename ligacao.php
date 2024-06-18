<?php
if(!isset($_SESSION)) {
    session_start();
}
 
$servidor="localhost";
$bd="life_health";
$user="root";
$password="";
 
$ligacao= new mysqli($servidor, $user, $password, $bd, 3306);
 
if($ligacao->connect_errno) {
    
}
else{
    $ligacao->set_charset("utf8");
    
}
 
?>