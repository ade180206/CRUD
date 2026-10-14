<?php
 session_start();
 require 'dbcon.php';
?>
<?php
  include('INCLUS/header.php');
?>

    <div class="container mt-4">

       <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>HEY !</strong> <?= $_SESSION['message']; ?>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
        
        


      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>
                DETAILS DE L'ETUDIANT
                <a href="creation.php" class="btn btn-primary float-end">AJOUTER</a>
              </h4>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>NOM_PRENOMS</th>
                    <th>EMAIL</th>
                    <th>TELEPHONE</th>
                    <th>ECOLE</th>
                    <th>ACTIONS</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $query = "SELECT * FROM etudiant";
                    $query_run = mysqli_query($con, $query);
                  
                    if (mysqli_num_rows($query_run) > 0) {

                        foreach ($query_run as $etudiant)
                        {
                            // echo etudiant 
                          ?> 
                            <tr>
                              <td><?= $etudiant['ID']; ?></td>
                              <td><?= $etudiant['NOM_PRENOMS']; ?></td>
                              <td><?= $etudiant['EMAIL']; ?></td>
                              <td><?= $etudiant['TELEPHONE']; ?></td>
                              <td><?= $etudiant['ECOLE']; ?></td>
                              <td>
                                <a href="modifier.php?ID=<?=$etudiant['ID']; ?>" class="btn btn-success btn-sm">modifier</a>
                                <a href="details.php?ID=<?=$etudiant['ID']; ?>" class="btn btn-info btn-sm">details</a>
                                <form action="code.php" method="POST" class="d-inline">
                                 <button type="submit" name="supprimer" value= "<?=$etudiant['ID']; ?>" class="btn btn-danger btn-sm">supprimer</button>
                                </form>

                              </td>
                            </tr>
                          <?php
                        }

                    }
                    else
                    {
                        echo "<h5> aucun enregistrement trouvé </h5>";
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    
<?php
  include('INCLUS/footer.php');
?> 
