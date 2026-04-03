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
                <label for="user" class="label">Nom</label>
                <i class="bx bx-user-circle icon"></i>
            </div>
             <div class="input_box">
                <input type="text" name="prenom" id="user" class="input-field" required>
                <label for="user" class="label">Prenom</label>
                <i class="bx bx-user-circle icon"></i>
            </div>
            <div class="input_box">
                <input type="email" name="mail" id="mail" class="input-field" required>
                <label for="mail" class="label">E-mail</label>
                <i class="bx bxl-gmail icon"></i>
            </div>
              <div class="input_box">
                <input type="text" name="mdp" id="pass" class="input-field" required>
                <label for="pass" class="label">Mot de passe</label>
                <i class="bx bx-lock-alt icon"></i>
            </div>
            <div class="remember-forgot">
                <div class="remember-me">
                    <input type="checkbox" name="" id="remember">
                    <label for="remember">Rester connecté</label>
                </div>
            </div>
            <div class="input_box">
                <input type="submit" class="input-submit" value="Login">
            </div>
            <div class="register">
                <span>Tu as deja un compte? <a href="cont.html"> Se Connecter</a></span>
            </div>
        </div>
    </div>


    
</body>
</html>