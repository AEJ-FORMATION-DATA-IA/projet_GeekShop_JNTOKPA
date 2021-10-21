<?php
$message = "";
if (isset($_POST['authentification'])) {
    if (!empty($_POST['login']) and !empty($_POST['pass'])) {
        $login = htmlspecialchars($_POST['login']);
        $pass = sha1($_POST['pass']);
        $taille_login = strlen($login);
        if ($taille_login > 10) {
            $message = "Le libelle ne doit pas depasser 10 caracteres";
        } else {
            $select_user->execute(array($login, $pass));
            $verif_user_exist = $select_user->rowCount();
            if ($verif_user_exist != 1) {
                $message = "Compte inexistant(creer un compte) ou erreur sur les parametres d'authentification";
            } else {
                $info_user = $select_user->fetch();
                $_SESSION['login'] = $info_user['login'];
                $_SESSION['connect'] = true;
                header('Location: vue/page_catalogue_produit.php?login=' . $_SESSION['login']);
            }
        }
    } else {
        $message = "Remplir les champs obligatoires";
    }
}
