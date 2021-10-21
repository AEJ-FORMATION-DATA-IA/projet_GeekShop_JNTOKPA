<h4 class="jnt-h4">AJOUTER UN NOUVEAU PRODUIT</h4>
<form class=" form-horizontal style-form" method="POST" action="">
    <div class="form-group">
        <h5><?php echo $message ?> </h5>
    </div>
    <div class="form-group ">
        <div class="col-lg-3">
            <input class=" form-control" name="ref_modif" type="hidden" value="<?= $reference; ?>" required />
        </div>
    </div>
    <div class="form-group ">
        <label for="lib_modif" class="control-label col-lg-2">Nom du Produit*</label>
        <div class="col-lg-3">
            <input class=" form-control" id="lib_modif" name="lib_modif" type="text" value="<?= $libelle; ?>" required />
        </div>
    </div>
    <div class="form-group ">
        <label for="qm_modif" class="control-label col-lg-2">Quantité minimale*</label>
        <div class="col-lg-3">
            <input class="form-control" id="qm_modif" type="number" name="qm_modif" value="<?= $quantite_minimale; ?>" required />
        </div>
    </div>
    <div class="form-group ">
        <label for="qs_modif" class="control-label col-lg-2">Quantité en stock</label>
        <div class="col-lg-3">
            <input class="form-control" id="qs_modif" type="number" name="qs_modif" value="<?= $quantite_en_stock; ?>" />
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-4">
            <button class="btn btn-primary" type="submit" name="modif_carac">Modifier</button>
        </div>
    </div>
</form>