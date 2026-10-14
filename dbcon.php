<?php 
$con = mysqli_connect("localhost","root","","blog");
if(!$con){

    die("echec de la connexion : " . mysqli_connect_error());
} 
?>