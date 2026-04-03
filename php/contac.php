<?php
include("CRUD/crud.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $message =$_POST['message'];
    $sql = "INSERT INTO contact (nom, prenom, mail, message) VALUES ('$nom', '$prenom', '$mail', '$message')";
    $result = mysqli_query($con, $sql);
if ($result) {
    header("Location: index.php");
    exit();
} else {
    echo "Erreur lors de l'envoi de votre message: " . mysqli_error($con);
}
}