<?php
session_start();
require 'dbcon.php';


if(isset($_POST['modifier']))
    {
    $etudiant_id = mysqli_real_escape_string($con, $_POST['etudiant_id']);
    $nom = mysqli_real_escape_string($con,$_POST['nom']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $telephone = mysqli_real_escape_string($con,$_POST['telephone']);
    $ecole = mysqli_real_escape_string($con,$_POST['ecole']);

    $query = "UPDATE  etudiant SET  NOM_PRENOMS = '$nom', EMAIL = '$email' , TELEPHONE = '$telephone' , ECOLE = '$ecole' WHERE ID ='$etudiant_id' " ;
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "etudiant creer avec succes";
        header("location:index.php");
        exit(0);
    }
      else
      {
          $_SESSION['message'] = "etudiant non mis a jour";
          header("location:index.php");
          exit(0);
      }
    }


if(isset($_POST['enregistrer_etudiant']))
{
    $nom = mysqli_real_escape_string($con,$_POST['nom']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $telephone = mysqli_real_escape_string($con,$_POST['telephone']);
    $ecole = mysqli_real_escape_string($con,$_POST['ecole']);

    $query = "INSERT INTO etudiant(NOM_PRENOMS, EMAIL , TELEPHONE , ECOLE) VALUES ('$nom','$email','$telephone','$ecole')";
    $query_run= mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['message'] = "etudiant creer avec succes";
        header("location:creation.php");
        exit(0);
    }
      else
      {
          $_SESSION['message'] = "etudiant non créé ";
          header("location:creation.php");
          exit(0);
      }
}
?>

