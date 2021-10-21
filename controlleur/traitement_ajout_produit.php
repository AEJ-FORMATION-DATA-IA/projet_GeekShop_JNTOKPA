<?php
$message = "";
if (isset($_POST['enrg_produit'])) {
    if (!empty($_POST['libelle']) and !empty($_POST['qtt_min'])) {
        $libelle = htmlspecialchars($_POST['libelle']);
        $qtt_min = htmlspecialchars($_POST['qtt_min']);
        $qtt_stock = htmlspecialchars($_POST['qtt_stock']);
        $taille_libelle = strlen($libelle);
        if ($taille_libelle > 255) {
            $message = "Le libelle ne doit pas depasser 255 caracteres";
        } else {
            $select_lib_produit->execute(array($libelle));
            $lib_exist = $select_lib_produit->rowCount();
            if ($lib_exist != 0) {
                $message = "Ce libelle de produit existe deja";
            } else {
                if ($qtt_min < 0) {
                    $message = "Les quantites minimale et en stock doivent etre positives";
                } else {
                    if ($qtt_stock < 0) {
                        $message = "Les quantites minimale et en stock doivent etre positives";
                    } else {
                        $ajout_produit->execute(array($libelle, $qtt_min, $qtt_stock));
                        $message = "Produit enregistré avec succès";
                    }
                }
            }
        }
    } else {
        $message = "Remplir les champs obligatoires*";
    }
}
