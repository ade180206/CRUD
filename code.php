<?php
session_start();
require 'dbcon.php';

if(isset($_POST['enregistrer']))
    {
    $nom = mysqli_real_escape_string($con,$_POST['nom']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $telephone = mysqli_real_escape_string($con,$_POST['telephone']);
    $ecole = mysqli_real_escape_string($con,$_POST['ecole']);
}
$requete = "INSERT INTO etudiant(NOM & PRENOMS, EMAIL , TELEPHONE , ECOLE) VALUES ('$nom','$email','$telephone','$ecole')";

$query_run = mysqli_query($con,$requete);
if($query_run){
    $_SESSION['message'] = "etudiant creer avec succes";
    header("location:creation.php");
    exit(0);
}
else{
    $_SESSION['message'] = "echec de la creation de l'etudiant";
    header("location:creation.php");
    exit(0);
}