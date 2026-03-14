<?php
include("CRUD/crud.php");

if($_SERVER['REQUEST_METHOD'] == "GET"){
    $mail = $_GET['mail'];
    $mdp  = $_GET['mdp'];


    $mail = mysqli_real_escape_string($con, $mail);
    $mdp  = mysqli_real_escape_string($con, $mdp);

    $sql = "SELECT * FROM users WHERE mail='$mail' AND mdp='$mdp'";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0){

        header("Location:index.php");
        exit();
    } else {
        
        echo "Mot de passe ou e-mail incorrect", header("Location: connexion.php");
    }
}
?>