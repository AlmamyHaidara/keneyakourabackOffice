<?php require_once("./functions/functions.config.php");
$allMedecin = getAllNurse();
?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            DataTables Example
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nom Prenom</th>
                        <th>Addresse</th>
                        <th>Structure</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Modifier</th>
                        <th>Suprimer</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($allMedecin as $key => $value) : ?>


                        <tr>
                            <td><?= $value["nom_prenom"] ?></td>
                            <td><?= $value["structure"] ?></td>
                            <td><?= $value["adresse"] ?></td>
                            <td><?= $value["email"] ?></td>
                            <td><?= $value["telephone"] ?></td>
                            <td><a href="#" rel="noopener noreferrer">Modifier</a></td>
                            <td><a href="#" rel="noopener noreferrer" class="text-danger">Suprimer</a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>