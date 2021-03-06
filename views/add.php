<?php
if(isset($_POST['submit']))
{
    $newEmploye=new EmployesContoller();
    $newEmploye->addEmploye();
}
?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-body bg-light">
                    <div class="card-header mb-2">Ajouter un employé</div>
                    <a href="<?php echo BASE_URL?>" class="btn btn-sm btn-secondary mr-2 mb-2">
                        <i class="fas fa-home"></i>
                    </a>
                    <form method="post">
                        <div class="form-group mb-2">
                            <label for="nom">Nom*</label>
                            <input type="text" name="nom" class="form-control" placeholder="Nom">
                        </div>
                        <div class="form-group mb-2">
                            <label for="prenom">Prénom*</label>
                            <input type="text" name="prenom" class="form-control" placeholder="Prénom">
                        </div>
                        <div class="form-group mb-2">
                            <label for="matricule">Matricule*</label>
                            <input type="text" name="matricule" class="form-control" placeholder="Matricule">
                        </div>
                        <div class="form-group mb-2">
                            <label for="depart">Département*</label>
                            <input type="text" name="depart" class="form-control" placeholder="Département">
                        </div>
                        <div class="form-group mb-2">
                            <label for="poste">Poste*</label>
                            <input type="text" name="poste" class="form-control" placeholder="Poste">
                        </div>
                        <div class="form-group mb-2">
                            <label for="date_emb">Date Embauche*</label>
                            <input type="date" name="date_emb" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="statue">statut*</label>
                            <select class="form-control" name="statue">
                                <option value="1">Active</option>
                                <option value="0">Résilié</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary " name="submit">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
