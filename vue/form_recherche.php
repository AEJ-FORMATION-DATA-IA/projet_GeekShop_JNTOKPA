<?php 
    $message_r="";
    if (isset($_GET['rech']) AND !empty($_GET['rech'])){
        $recherche = htmlspecialchars($_GET['rech']);
        $req_select_produit_rech = 'SELECT * FROM produit WHERE libelle LIKE "%'.$recherche.'%" ORDER BY libelle ASC';
        $select_all_produit = $bdd->query($req_select_produit_rech);
        $message_r = "resultat pour <strong>".$recherche."</strong>";
    }

?>

<form class=" form-horizontal style-form"  method="GET" action="">
    <div class="form-group">
    <h5><?php echo $message_r ?> </h5>
    </div>
    <div class="row form-group">
        <div class="col-lg-4">
            <input class="form-control" type="search" name="rech" placeholder="Recherche" />
        </div>
    </div>
</form>

