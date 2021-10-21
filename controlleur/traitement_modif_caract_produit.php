<?php
$message = "";
if (isset($_POST['modif_carac'])) {
    $ref = htmlspecialchars($_POST['ref_modif']);
    $newLibelle = htmlspecialchars($_POST['lib_modif']);
    $newQm = htmlspecialchars($_POST['qm_modif']);
    $newQs = htmlspecialchars($_POST['qs_modif']);
    $select_lib_produit->execute(array($newLibelle));
    $lib_exist = $select_lib_produit->rowCount();
    if ($newQm < 0) {
        $message = "Les quantites minimale et de stock doivent etre positives";
    } else {
        $modifier_produit->execute(array($newLibelle, $newQm, $newQs, $ref));
        header('Location: page_catalogue_produit.php');
    }
}
