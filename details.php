<?php
require_once('dbcon.php');
 ?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>modification d'etudiant </title>
  </head>
  <body>
    <div class="container  mt-5">
       
        
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h4> DETAILS  DE  L'ETUDIANT 
                        <a href="index.php" class="btn btn-primary float-end">RETOUR</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_GET['ID'])) {
                        $etudiant_id = mysqli_real_escape_string($con, $_GET['ID']);
                        $query = "SELECT * FROM etudiant WHERE id = '$etudiant_id' ";
                        $query_run = mysqli_query($con, $query);
                        
                        if(mysqli_num_rows($query_run) > 0 )
                            {
                                $etudiant_id = mysqli_fetch_array($query_run) ;
                            }    
                         
                        ?>

                    
                        

                        <div class="mb-3">
                            <label for="nom">NOM & PRENOMS</label>
                                   <p class="form-control">
                                     <?= htmlspecialchars($etudiant_id['NOM_PRENOMS']); ?>
                                   </p>
                        </div>
                        <div class="mb-3">
                            <label for="email">EMAIL</label>
                                    <p class="form-control">
                                     <?= htmlspecialchars($etudiant_id['EMAIL']); ?>
                                   </p>
                        </div>
                        <div class="mb-3">
                            <label for="telephone">TELEPHONE</label>
                               <p class="form-control">
                                     <?= htmlspecialchars($etudiant_id['TELEPHONE']); ?>
                                </p>
                        </div>
                        <div class="mb-3">
                            <label for="ecole">ECOLE</label>
                            <p class="form-control">
                                <?= htmlspecialchars($etudiant_id['ECOLE']); ?>
                            </p>
                        </div>
                   
                <?php
                    
                    
                }
                else
                {
                    echo "<h5>Aucun ID fourni pour l'etudiant </h5>";
                }
                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>