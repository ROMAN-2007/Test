<?php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cont.css">
    <link rel="stylesheet" href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <div class="wrapper">
        <div class="login-box">
            <div class="login-header">
                <span>login</span>
            </div>
            <div class="input_box">
                <input type="text" name="nom" id="user" class="input-field" required>
                <label for="user" class="label">Email</label>
                <i class="bx bxl-gmail icon"></i>
            </div>
              <div class="input_box">
                <input type="text" name="mdp" id="pass" class="input-field" required>
                <label for="pass" class="label">Mot de Passe</label>
                <i class="bx bx-lock-alt icon"></i>
            </div>
            <div class="remember-forgot">
                <div class="remember-me">
                    <input type="checkbox" name="" id="remember">
                    <label for="remember">Rester connecté</label>
                </div>
                <div class="forgot">
                    <a href="#">Mot de passe Oublie?</a>
                </div>
            </div>
            <div class="input_box">
                <input type="submit" class="input-submit" value="Login">
            </div>
            <div class="register">
                <span>Tu n'as pas de compte <a href="insc.html">S'inscrire</a></span>
            </div>
        </div>
    </div>


    
</body>
</html>