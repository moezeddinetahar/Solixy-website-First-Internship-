<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SOLIXY.Enregistrement</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
<style>
        

        .login-container {
    max-width: 400px;
    margin-top: 20px;
    margin-bottom: 20px;
}
  

        form {
            display: flex;
            flex-direction: column;
        }

        input {
            padding: 10px;
            margin-bottom: 4px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background: #f0f0f0;
            
        }

        button {
            background-color: #4caf50; 
            color: white; 
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px; 
        }

        button:hover {
            background-color: #45a049; 
        }
    .login-container h3 {
    margin-top: 15px; 
}
    </style>

<body>
 <?php include 'header.php'; ?>

    <main>
    
  <div style="margin-left: 39%;" class="login-container">
            <h3>S'inscrire<span style="color: red;"> *</span></h3>
            <form method="post" action="enregistrement.php" onsubmit="return validateForm()">
                <input type="text" name="username" placeholder="Nom d'utilisateur" required /><br />
                <input type="password" name="password" placeholder="Mot de passe" required /><br />
                <input type="text" name="fname" placeholder="Votre prénom" required /><span id="fnameError" class="error"></span><br />
                <input type="text" name="family" placeholder="Votre nom de famille" required /><span id="familyError" class="error"></span><br />
                <input type="date" name="datebirth" max="2024-12-31" required /><br />
                <input type="email" name="email" placeholder="Adresse email" required /><span id="emailError" class="error"></span><br /><br />
                <button type="submit" name="submit">S'inscrire</button>
            </form>
        </div>

        <script>
            function validateForm() {
                var fname = document.forms[0]["fname"].value;
                var family = document.forms[0]["family"].value;
                var email = document.forms[0]["email"].value;

                var nameRegex = /^[a-zA-Z]+$/;
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                // Réinitialiser les messages d'erreur
                document.getElementById("fnameError").innerHTML = "";
                document.getElementById("familyError").innerHTML = "";
                document.getElementById("emailError").innerHTML = "";

                if (!nameRegex.test(fname)) {
                    document.getElementById("fnameError").innerHTML = "Le prénom doit contenir uniquement des lettres.";
                    return false;
                }

                if (!nameRegex.test(family)) {
                    document.getElementById("familyError").innerHTML = "Le nom de famille doit contenir uniquement des lettres.";
                    return false;
                }

                if (!emailRegex.test(email)) {
                    document.getElementById("emailError").innerHTML = "Veuillez entrer une adresse email valide.";
                    return false;
                }

                return true;
            }
        </script>

<?php
session_start();
require 'config.php';

if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $firstname = $_POST['fname'];
    $lastname = $_POST['family'];
    $datebirth = $_POST['datebirth'];
    $email = $_POST['email'];

    $sql = "INSERT INTO accounts (username, password, firstname, lastname, datebirth, email) VALUES (?, ?, ?, ?, ?, ?)";
    
    // Utiliser une requête préparée pour la sécurité
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, "ssssss", $username, $password, $firstname, $lastname, $datebirth, $email);
    mysqli_stmt_execute($stmt);

    // Récupérer les données de l'utilisateur
    $retrieveSql = "SELECT * FROM accounts WHERE username=?";
    $stmt = mysqli_prepare($db, $retrieveSql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);

    // Stocker les données de l'utilisateur dans une variable de session
    $_SESSION['newUser'] = $user;

    header("location: ad_gestion_de_compt.php");
    exit();
}
?>

        
        
    </main>
  </body>


 <?php include 'footer.php'; ?>


</html>
