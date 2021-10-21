<?php
session_start();
include_once '../modele/connexion.php';
include_once '../controlleur/traitement_creation.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>CREATION DE VOTRE COMPTE</title>
</head>

<body>
    <div class="positionner_au_milieu">
        <div class="entete_authentifier"></div>
        <div class="form">
            <?php include_once 'form_creation_compte.php'; ?>
        </div>
        <div>
            <h2><a href="../index.php">connectez-vous</a></h2>
        </div>
    </div>

</body>

</html>