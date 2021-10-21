<?php
session_start();
include_once 'modele/connexion.php';
include_once 'controlleur/traitement_login.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <title>GeekShop</title>
</head>

<body>
    <div class="container">
        <div class="">CONNECTEZ-VOUS</div>
        <div class="">
            <?php include_once 'vue/form_login.php'; ?>
        </div>
        <div>
            <h2><a href="vue/page_creation_du_compte.php" class="jnt-lien">ou créer votre compte</a< /h2>
        </div>
    </div>

</body>

</html>