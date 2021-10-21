<h4 class="jnt-h4">ENTREE ET SORTIE DE PRODUIT (mettre le signe (-) devant la quanté à retrancher)</h4>
<form class=" form-horizontal style-form" method="POST" action="">
    <div class="form-group">
        <h5><?php echo $message ?> </h5>
    </div>
    <div class="form-group ">
        <div class="col-lg-3">
            <input class="form-control" type="hidden" name="ref" value="<?= $reference; ?>" required />
        </div>
    </div>
    <div class="form-group ">
        <label for="lib" class="control-label col-lg-2">Libelle</label>
        <div class="col-lg-3">
            <input class="form-control" id="lib" type="text" name="lib" value="<?= $libelle; ?>" required disabled />
        </div>
    </div>
    <div class="form-group ">
        <label for="qm" class="control-label col-lg-2">Quantite minimale</label>
        <div class="col-lg-3">
            <input class="form-control" id="qm" type="number" name="qm" value="<?= $quantite_minimale; ?>" required disabled />
        </div>
    </div>
    <div class="form-group ">
        <label for="qs" class="control-label col-lg-2">Quantite minimale</label>
        <div class="col-lg-3">
            <input class="form-control" id="qs" type="number" name="qs" value="<?= $quantite_en_stock; ?>" required disabled />
        </div>
    </div>
    <div class="form-group ">
        <label for="qtt_ajout" class="control-label col-lg-2">Quantité ajoutéé ou retranchée (-) </label>
        <div class="col-lg-3">
            <input class="form-control" id="qtt_ajout" type="number" name="qtt_ajout" />
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-4">
            <button class="btn btn-primary" type="submit" name="modifier_qtt_produit">Modifier</button>
        </div>
    </div>
    </div>
</form>