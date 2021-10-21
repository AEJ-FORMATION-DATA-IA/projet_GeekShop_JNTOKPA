<?php 
$message = "";
    if(isset($_POST['creation_compte'])){
    if(!empty($_POST['login_c']) AND !empty($_POST['pass_c'])){
        $login_c = htmlspecialchars($_POST['login_c']);
        $pass_c = sha1($_POST['pass_c']);
        $select_all_user ->execute();
        $nbre_user = $select_all_user->rowCount();
        if($nbre_user !=0){
            $message = "Creation de compte impossible (Un compte existe deja). Veuillez vous connecter.";
        }else{
            $creer_compte->execute(array($login_c,$pass_c));
            header ('Location: ../index.php');
        }
    }else{
        $message = "Veuillez remplir tous les champs";
    }
}
