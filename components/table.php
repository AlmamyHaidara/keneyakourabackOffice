<?php require_once("./functions/functions.config.php");
$allMedecin = getAllNurse();
$id = 0;
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
                        <th>Id</th>
                        <th>Nom Prenom</th>
                        <th>Addresse</th>
                        <th>Structure</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th> Dater_1er</th>
                        <th> statut</th>
                        <th> Remarque</th>
                        <th>Modifier</th>
                        <th>Suprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($allMedecin ? $allMedecin : [] as $key => $value) : ?>
                        <!-- <tr>
                            <td><?php // $value["id_med"] 
                                ?></td>
                            <td><?php //$value["nom_prenom"] 
                                ?></td>
                            <td><?php //$value["structure"] 
                                ?></td>
                            <td><?php // $value["adresse"] 
                                ?></td>
                            <td><?php // $value["email"] 
                                ?></td>
                            <td><?php //$value["telephone"] 
                                ?></td>
                            <td><a href="#" class="btn btn-transparent text-primary edit-btn" data-toggle="modal" data-target="#editModal" data-id="<?= $value["id_med"] ?>">Modifier</a></td>
                            <td><a href="./functions/medecin.php?delete_nurse=<?= $value["id_med"] ?>" rel="noopener noreferrer" class="text-danger">Supprimer</a></td>
                        </tr> -->

                        <tr>
                            <td><?= $value["id_med"] ?></td>
                            <td><?= $value["nom_prenom"] ?></td>
                            <td><?= $value["structure"] ?></td>
                            <td><?= $value["adresse"] ?></td>
                            <td><?= $value["email"] ?></td>
                            <td><?= $value["telephone"] ?></td>
                            <td><?= $value["date_1ere_rdv"] ?></td>
                            <td><?= $value["statut"] ?></td>
                            <td><?= $value["remarque"] ?></td>
                            <!-- Ajoutez un attribut data-id contenant l'identifiant de l'élément -->
                            <td><a href="#" class="btn btn-transparent text-primary edit-btn" data-toggle="modal" data-target="#editModal" data-id="<?= $value["id_med"] ?>">Modifier</a></td>
                            <td>
                                <a href="#" onclick="return confirmDelete();" class="text-danger">Supprimer</a>
                            </td>

                            <script>
                                function confirmDelete() {
                                    if (confirm("Voulez-vous vraiment supprimer cet medecin ?")) {
                                        window.location.href = "./functions/medecin.php?delete_nurse=<?= $value["id_med"] ?>";
                                        return true;
                                    }
                                    return false;
                                }
                            </script>

                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Edit-->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="./functions/medecin.php">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="0" aria-label="id_med" aria-describedby="basic-addon2" name="id_med">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Nom Et Prenom" aria-label="nom_prenom" aria-describedby="basic-addon2" name="nom_prenom">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Adresse" aria-label="adresse" aria-describedby="basic-addon2" name="adresse">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Structure" aria-label="structure" aria-describedby="basic-addon2" name="structure">
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" aria-label="email" aria-describedby="basic-addon2" name="email">
                        </div>
                        <div class="input-group mb-3">
                            <input type="phone" class="form-control" placeholder="Telephone" aria-label="telephone" aria-describedby="basic-addon2" name="telephone">
                        </div>
                        <div class='input-group mb-3'>
                            <input type='date' class="form-control" placeholder="Date" aria-label="date" aria-describedby="basic-addon2" name="date" />
                        </div>
                        <div class="form-group md-3">
                            <label for="inputState">Statut</label>
                            <select id="inputState" class="form-control" name="statut">
                                <option <?= ($value["statut"] ?? '') == 'En cours' ? 'selected' : '' ?>>En cours</option>
                                <option <?= ($value["statut"] ?? '') == 'Valider' ? 'selected' : '' ?>>Valider</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Remarque</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="remarque"><?= $value["remarque"] ?? '' ?></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="editMedecin">Save changes</button>
                        </div>
                    </form>
                    <!-- <form method="POST" action="./functions/medecin.php">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Nom Et Prenom" aria-label="Nom Prenom" aria-describedby="basic-addon2" name="nom_prenom">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Adresse" aria-label="adresse" aria-describedby="basic-addon2" name="adresse">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Structure" aria-label="structure" aria-describedby="basic-addon2" name="structure" value="<?= $value["structure"] ?? '' ?>">
                        </div>
                        <div class='input-group mb-3'>
                            <?php var_dump($value['structure']) ?>
                            <input type='date' class="form-control" id='datetimepicker4' name="date" value="<?= $value["date_1ere_rdv"] ?? '' ?>" />
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" aria-label="email" aria-describedby="basic-addon2" name="email" value="<?= $value["email"] ?? '' ?>">
                        </div>
                        <div class="form-group md-3">
                            <label for="inputState">Statut</label>
                            <select id="inputState" class="form-control" name="statut">
                                <option <?= ($value["statut"] ?? '') == 'En cours' ? 'selected' : '' ?>>En cours</option>
                                <option <?= ($value["statut"] ?? '') == 'Valider' ? 'selected' : '' ?>>Valider</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <input type="phone" class="form-control" placeholder="Telephone" aria-label="telephone" aria-describedby="basic-addon2" name="telephone" value="<?= $value["telephone"] ?? '' ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Remarque</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="remarque"><?= $value["remarque"] ?? '' ?></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary" name="editMedecin">Modifier</button>
                        </div>
                    </form> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Edit-->

    <!-- Modal Edit-->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Ajoute medecin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="./functions/medecin.php">

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Nom Et Prenom" aria-label="Nom Prenom" aria-describedby="basic-addon2" name="nom_prenom">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Adresse" aria-label="adresse" aria-describedby="basic-addon2" name="adresse">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Structure" aria-label="structure" aria-describedby="basic-addon2" name="structure">
                        </div>

                        <div class='input-group mb-3'>
                            <input type='date' class="form-control" id='datetimepicker4' name="date" />
                        </div>
                        <script type="text/javascript">
                            $(function() {
                                $('#datetimepicker4').datetimepicker();
                            });
                        </script>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" aria-label="email" aria-describedby="basic-addon2" name="email">
                        </div>
                        <div class="form-group md-3">
                            <label for="inputState">Statut</label>
                            <select id="inputState" class="form-control" name="statut">
                                <option selected>En cours</option>
                                <option>Valider</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <input type="phone" class="form-control" placeholder="Telephone" aria-label="telephone" aria-describedby="basic-addon2" name="telephone">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Remarque</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="remarque"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary" name="addMedecin">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Edit-->
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const editButtons = document.querySelectorAll('.edit-btn');

        editButtons.forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();

                // Récupérez l'identifiant de l'élément à modifier à partir de l'attribut data-id
                const id = button.getAttribute('data-id');

                // Mettez à jour les champs du formulaire avec les données de l'élément correspondant
                const row = button.closest('tr');
                const nomPrenom = row.querySelector('td:nth-child(2)').textContent;
                const adresse = row.querySelector('td:nth-child(3)').textContent;
                const structure = row.querySelector('td:nth-child(4)').textContent;
                const email = row.querySelector('td:nth-child(5)').textContent;
                const telephone = row.querySelector('td:nth-child(6)').textContent;
                const date1 = row.querySelector('td:nth-child(7)').textContent;


                document.querySelector('[name="id_med"]').value = id;
                document.querySelector('[name="nom_prenom"]').value = nomPrenom;
                document.querySelector('[name="structure"]').value = structure;
                document.querySelector('[name="adresse"]').value = adresse;
                document.querySelector('[name="email"]').value = email;
                document.querySelector('[name="telephone"]').value = telephone;
                document.querySelector('[name="date"]').value = new Date(date1);
                console.log('====================================');
                console.log(date1);
                console.log('====================================');
            });
        });
    });
</script>