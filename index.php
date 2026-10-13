<?php
    require_once 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card"> <br>
            <div class="card-header">
              <h4>
                details de l'etudiant
                <a href="creation.php" class="btn btn-primary float-end">ajouter</a>
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
                            // echo
                            ?>
                            <tr>
                              <td><?= $etudiant['ID']; ?></td>
                              <td><?= $etudiant['NOM_PRENOMS']; ?></td>
                              <td><?= $etudiant['EMAIL']; ?></td>
                              <td><?= $etudiant['TELEPHONE']; ?></td>
                              <td><?= $etudiant['ECOLE']; ?></td>
                              <td>
                                <a href="modifier.php?id=<?= $etudiant['ID']; ?>" class="btn btn-success btn-sm">modifier</a>
                                <a href="" class="btn btn-danger btn-sm">supprimer</a>
                                <a href="" class="btn btn-info btn-sm">details</a>
                              </td>
                            </tr>
                            <?php
                        }

                    }
                    else
                    {
                        echo "<h5>aucun enregistrement trouvé</h5>";
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>