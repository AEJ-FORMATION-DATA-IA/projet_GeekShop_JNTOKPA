<?php
//connexion à la bdd
try {
    $bdd = new PDO('mysql:host=localhost;dbname=geekshop;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

//selection
$select_produits = $bdd->prepare('SELECT * FROM produit ORDER BY libelle');
$select_all_user = $bdd->prepare('SELECT * FROM user');
$select_user = $bdd->prepare('SELECT * FROM user WHERE login=? AND pass=?');
$select_produit = $bdd->prepare('SELECT * FROM produit WHERE reference=?');
$select_lib_produit = $bdd->prepare('SELECT * FROM produit WHERE libelle=?');
$req_select_all_produit = 'SELECT * FROM produit ORDER BY libelle ASC';
$req_select_all_produit_rupture = 'SELECT * FROM produit WHERE quantite_en_stock < quantite_minimale';


//insertion
$ajout_produit = $bdd->prepare('INSERT INTO produit (libelle, quantite_minimale, quantite_en_stock) VALUES (?, ?, ?)');
$creer_compte = $bdd->prepare('INSERT INTO user (login, pass) VALUES (?, ?)');

//modifier les caracteristiques d'un produit
$modifier_produit = $bdd->prepare('UPDATE produit SET libelle = ?, quantite_minimale = ?, quantite_en_stock = ? WHERE reference = ?');

//selection du produit dont on veut modifier les caracteristiques
$modif = filter_input(INPUT_GET, "modif", FILTER_SANITIZE_NUMBER_INT);
if ($modif) {
    $select_produit->execute(array($modif));
    $infoProduit = $select_produit->fetch();
    $reference = $infoProduit["reference"];
    $libelle = $infoProduit["libelle"];
    $quantite_minimale = $infoProduit["quantite_minimale"];
    $quantite_en_stock = $infoProduit["quantite_en_stock"];
}

//Variation stock
$modifier_qtt_produit = $bdd->prepare('UPDATE produit SET quantite_en_stock = ? WHERE reference =?');

//selection du produit dont on veut enregistrer une variation de stock
$var = filter_input(INPUT_GET, "var", FILTER_SANITIZE_NUMBER_INT);
if ($var) {
    $select_produit->execute(array($var));
    $infoProduit = $select_produit->fetch();
    $reference = $infoProduit["reference"];
    $libelle = $infoProduit["libelle"];
    $quantite_minimale = $infoProduit["quantite_minimale"];
    $quantite_en_stock = $infoProduit["quantite_en_stock"];
}

//effacer produit
$supprimer_produit = $bdd->prepare('DELETE FROM produit WHERE reference = ?');
$del = filter_input(INPUT_GET, "del", FILTER_SANITIZE_NUMBER_INT);
if ($del) {
    $supprimer_produit->execute(array($del));
}
