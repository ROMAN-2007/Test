<?php
include("CRUD/crud.php");




if($_SERVER['REQUEST_METHOD']=="POST"){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];

    $sql= "INSERT INTO users (nom, prenom, email, mot_de_passe) VALUES ('$nom', '$prenom', '$mail', '$mdp')";

    $result= mysqli_query($con, $sql);
    
    if($result){
        header("Location: index.php");
        exit();
    }else{
        echo "Erreur lors de l'iscription:" . mysqli_error($con);
    };


}
