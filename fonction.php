<?php
function inscription(){
    global $bdd;
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $poste = htmlspecialchars($_POST["poste"]);
}