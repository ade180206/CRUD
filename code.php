<?php
session_start();
require 'dbcon.php';

if(isset($_POST['supprimer']))
    {
    $etudiant_id = mysqli_real_escape_string($con, $_POST['supprimer']);

    $query ="DELETE FROM etudiant WHERE ID ='$etudiant_id' " ;
    $query_run = mysqli_query($con, $query);

    if($query_run && mysqli_affected_rows($con) > 0)
    {
        $_SESSION['message'] = "supression effectuée avec succes";
        header("location:index.php");
        exit(0);
    }
    else
      {
          $_SESSION['message'] = "etudiant non supprimé";
          header("location:index.php");
          exit(0);
      }
    }  


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
        $_SESSION['message'] = "etudiant modifier avec succes";
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

    if($nom == '' || $email == '' || $telephone == '' || $ecole == '')
{
    $_SESSION['message'] = "Tous les champs sont obligatoires";
    header("location:creation.php");
    exit(0);
}

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

