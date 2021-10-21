<h4 class="jnt-h4">AJOUTER UN NOUVEAU PRODUIT</h4>
<form class=" form-horizontal style-form"  method="POST" action="">
    <div class="form-group">
    <h5><?php echo $message ?> </h5>
    </div>
    <div class="form-group ">
        <label for="libelle" class="control-label col-lg-2">Nom du Produit*</label>
        <div class="col-lg-3">
            <input class=" form-control" id="libelle" name="libelle" minlength="2" type="text" value="<?php if(isset($_POST['libelle'])) { echo $_POST['libelle'];} ?>" required/>
        </div>
    </div>
    <div class="form-group ">
        <label for="qtt_min" class="control-label col-lg-2">Quantité minimale*</label>
        <div class="col-lg-3">
            <input class="form-control" id="qtt_min" type="number" name="qtt_min" value="<?php if(isset($_POST['qtt_min'])) { echo $_POST['qtt_min'];} ?>"  required/>
        </div>
    </div>
    <div class="form-group ">
        <label for="qtt_stock" class="control-label col-lg-2">Quantité en stock</label>
        <div class="col-lg-3">
            <input class="form-control" id="qtt_stock" type="number" name="qtt_stock"  value="<?php if(isset($_POST['qtt_stock'])) { echo $_POST['qtt_stock'];} ?>"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-4">
            <button class="btn btn-primary" type="submit" name="enrg_produit">Enregistrer</button>
        </div>
    </div>
</form>
