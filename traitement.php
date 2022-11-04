<?php
require_once("./classe/utilisateurManager.php"); 
require_once ("./classe/PDOFactory.php");
include_once("./inc/header.php");

$bdd = PDOFactory::getMySQLConnection();

if (isset($_REQUEST['Action'])) {
        if($_REQUEST['Action'] == "signUp")
        {

                $utilisateurManager = new utilisateurManager($bdd);
                $utilisateur = new utilisateur(array('username' => $_REQUEST['username-sign'], 'email' => $_REQUEST['email-sign'], 'password'=>$_REQUEST['password-sign']));
                $utilisateurManager->insertUtilisateur($utilisateur);
                header("Location: ./index.php");
    
        }
        else if ($_REQUEST['Action'] == "Login")
        {
                $utilisateurManager = new utilisateurManager($bdd);
                if ($utilisateurManager->connexion($_REQUEST['username-log'], $_REQUEST['password-log'])) {
                        header("Location: ./accueil.php");
                }
                else {
                        header("Location: ./index.php");
                }
        }
}

?>