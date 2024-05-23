<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SOLIXY.Enregistrement</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
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
                <input type="text" name="fname" placeholder="Votre prénom" /><span id="fnameError" class="error"
                    required></span><br />
                <input type="text" name="family" placeholder="Votre nom de famille" /><span id="familyError"
                    class="error" required></span><br />
                <input type="date" name="datebirth" max="2024-12-31" required /><br />
                <input type="text" name="email" placeholder="Adresse email" /><span id="emailError" class="error"
                    required></span><br /><br />
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
                document.getElementById("familyError").innerHTML =
                    "Le nom de famille doit contenir uniquement des lettres.";
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
    require 'config.php';
    
    
    if (isset($_POST["submit"])) {
       
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $firstname = $_POST['fname'];
        $family = $_POST['family'];
        $datebirth = $_POST['datebirth'];
        $email = $_POST['email'];
    
        $sql = "INSERT INTO accounts (username, password, firstname, family, datebirth, email) VALUES 
        
        ('$username', '$password', '$firstname', '$family', '$datebirth', '$email')";
    
        mysqli_query($db, $sql);
    
        header("location: Espace Internet.php");
        exit();
}
?>


    </main>
</body>


<?php include 'footer.php'; ?>


</html>