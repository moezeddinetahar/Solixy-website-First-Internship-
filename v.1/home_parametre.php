<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SOLIXY.Parametre</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
</head>
    <style>
    body{background: rgba(0, 0, 0, 0.2);}
   
form {
        background-color: #ffffff;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 8px 4px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 500px;
        margin-left: 100px;
        padding-left: 10px;
      }

label {
    display: block;
    margin-bottom: 0.5rem;
}

input, textarea {
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 1rem;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #1e3b66;
    color: white;
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #204e5c;
}

footer .login-container {
    margin: 50px;
    margin-left: 30%;
}

    </style>


<?php include 'home_header.php'; ?>
<body>


<?php
session_start();
?>

<br><br><br>
<h1>&nbsp;Parametre ! </h1> <br>
  <div class="login-container">
    <h1 class="login-heading">Changer de mot de passe</h1><hr>
    <p>	Votre mot de passe doit contenir au moins 6 caractères ainsi qu’une <br>combinaison de chiffres, de lettres et de caractères spéciaux ( !$@%).</p>

        <form method="post">
            <div style="position: relative">
                <input type="password" class="login-input" name="currentPassword" id="currentPassword" placeholder="Mot de passe actuel"  required />
                <i class="fas fa-eye eye-icon" onclick="togglePasswordVisibility('currentPassword')"></i>
            </div>
            <div style="position: relative">
                <input type="password" class="login-input" name="newPassword" id="newPassword" placeholder="Nouveau mot de passe" required />
                <i class="fas fa-eye eye-icon" onclick="togglePasswordVisibility('newPassword')"></i>
            </div>
            <div style="position: relative">
                <input type="password" class="login-input" name="confirmPassword" id="confirmPassword" placeholder="Retaper le mot de passe" required />
                <i class="fas fa-eye eye-icon" onclick="togglePasswordVisibility('confirmPassword')"></i>
            </div>
            <button type="submit" name="submit">Changer le mot de passe</button>
        </form>

        <script>
            function togglePasswordVisibility(inputId) {
                var passwordInput = document.getElementById(inputId);
                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                } else {
                    passwordInput.type = "password";
                }
            }
        </script>

<br>
</div>
</body>
<?php include 'home_footer.php'; ?>

</html>