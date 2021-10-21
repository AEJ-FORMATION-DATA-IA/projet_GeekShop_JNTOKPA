<?php
$message = "";
if (isset($_POST['modifier_qtt_produit'])) {
    if (!empty($_POST['qtt_ajout'])) {
        $ref = htmlspecialchars($_POST['ref']);
        $qtt_ajout = htmlspecialchars($_POST['qtt_ajout']);
        $select_produit->execute(array($ref));
        $info_produit = $select_produit->fetch();
        $ancien_qtt = $info_produit['quantite_en_stock'];
        $qtt_modif = $ancien_qtt + $qtt_ajout;
        $modifier_qtt_produit->execute(array($qtt_modif, $ref));
        header('Location: page_catalogue_produit.php');
    } else {
        $message = "Remplir tous les champs";
    }
}
