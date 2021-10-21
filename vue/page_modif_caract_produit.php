<?php
session_start();
//include_once 'securite.php';
include_once '../modele/connexion.php';
include_once '../controlleur/traitement_modif_caract_produit.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Accueil</title>
</head>

<body>
    <div>
        <div>
            <h1>Geek<span>Shop</span></h1>
        </div>
        <div class="row">
            <div class="col-md-3">
                <?php include_once('menu.php'); ?>
            </div>
            <div class="col-md-9">
                <div class="form">
                    <?php
                    include_once('form_modif_carac_produit.php');
                    ?>
                </div>


            </div>

        </div>

    </div>
</body>

</html>