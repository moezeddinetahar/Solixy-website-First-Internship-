<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SOLIXY_Compte</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
</head>


<?php include 'header.php'; ?>
<style>
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

input,
textarea {
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

form p {
    margin: 1rem 0;
    font-size: 1rem;
    color: #999;
}

form p span {
    color: #4834d4;
}
</style>

<body>

    <div class="login-container">
        <h1 class="login-heading">Espace Intranet</h1>

        <form method="post" action="">
            <p>default username = <span>user</span> &amp; password = <span>user</span></p>
            <input type="text" class="login-input" name="username" placeholder="Enter your Username" required />
            <div style="position: relative">
                <input type="password" class="login-input" id="passwordInput" name="password"
                    placeholder="Enter your Password" required />
                <i class="fas fa-eye eye-icon" onclick="togglePasswordVisibility()"></i>
            </div>
            <button type="submit" name="submit" class="login-button">Login</button>
            <button type="submit" class="criee_un_compte-button"><a href="\Solixy web-site\v.1\enregistrement.php"
                    class="criee_un_compte-button_a">Créer un compte</a></button>
        </form>
        <p><a href="mode_passe_oubliee.php" class="forgot-password">Mot de passe oublié ?</a></p>
        <br>
        <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("passwordInput");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
        </script>

        <?php
session_start();
error_reporting(1);
require 'config.php';

if (isset($_POST["submit"])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM accounts WHERE username='$username' AND password='$password'";
    $result = mysqli_query($db, $sql);
    $numrows = mysqli_num_rows($result);

    if ($numrows == 1) {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['family'] = $row['family']; 

        header("location: homepage.php");
        exit();
    } else {
        echo "<center><h2><font color='red'>Invalid username or password</font></h2></center><br>";
    }
}
?>

    </div>


</body>

<?php include 'footer.php'; ?>


<?php
session_start();
error_reporting(1);
require 'config.php';

if (isset($_POST["submit"])) {
    $username =  $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM accounts WHERE username='$username' AND password='$password'";
    $result = mysqli_query($db, $sql);
    $numrows = mysqli_num_rows($result);

    if ($numrows == 1) {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['family'] = $row['family']; 

        header("location: homepage.php");
        exit();
    } else {
        echo "<center><h2><font color='red'>Invalid username or password</font></h2></center><br>";
    }
}
?>

</html>