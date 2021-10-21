<?php
session_start();
include_once('../modele/connexion.php');
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
                <div>
                    <?php
                    $select_all_produit_rupture = $bdd->query($req_select_all_produit_rupture);
                    include_once('table_produit_rupture.php');
                    ?>
                </div>

            </div>

        </div>

    </div>
</body>

</html>