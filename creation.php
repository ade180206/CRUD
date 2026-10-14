<?php session_start() ;?>
<?php
  include('INCLUS/header.php');
?>
    <div class="contaier  mt-5">
       
        <?php include('message.php'); ?>
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h4>AJOUTER UN ETUDIANT 
                        <a href="index.php" class="btn btn-primary float-end">RETOUR</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">
                        <div class="mb-3">
                            <label >NOM & PRENOMS</label>
                            <input type="text" name="nom" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label >EMAIL</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="mb-3"> 
                            <label >TELEPHONE</label>
                            <input type="text" name="telephone" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label >ECOLE</label>
                            <input type="text" name="ecole" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="enregistrer_etudiant" class="btn btn-primary">ENREGISTRER</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
  include('INCLUS/footer.php');
?>