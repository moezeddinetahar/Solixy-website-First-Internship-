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
</style>


<?php include 'header.php'; ?>

<body>
    <br><br><br>
    <div class="login-container">
        <h1 class="login-heading">Trouvez votre compte</h1>
        <hr>
        <p> Veuillez entrer votre e-mail pour rechercher votre compte</p>

        <form method="post">
            <input type="email" name="email" required placeholder="Email" />
            <input type="date" name="datebirth" /><br />
            <button type="submit" name="submit" class="login-button">Rechercher</button>
            <button class="criee_un_compte-button"><a href="\Solixy web-site\v.1\Espace Internet.php"
                    class="criee_un_compte-button_a">Anuller</a></button>
        </form>



        <?php
        require 'config.php';

        if (isset($_POST["submit"])) {

            $email = $_POST['email'];
            $datebirth = $_POST['datebirth'];
            $sql = "SELECT * FROM accounts WHERE email = '$email' AND datebirth = '$datebirth'";
            $result = mysqli_query($db, $sql);

            if ($result) {
                $user = mysqli_fetch_assoc($result);

                if ($user) {
                    echo '<form method="post">
                            <input type="password" name="password" placeholder="Mot de passe" /><br />
                            <button type="submit" name="updatePassword">Mettre à jour le mot de passe</button>
                          </form>';

                    if (isset($_POST["updatePassword"])) {
                        $newPassword = md5($_POST['password']);
                        $id = $user['id'];
                        $sql = "UPDATE accounts SET password = '$newPassword' WHERE id='$id'";
                        mysqli_query($db, $sql);

                        echo 'Le mot de passe a été mis à jour avec succès.';
                    }
                } else {
                    echo 'Email and date of birth do not match.';
                }
            } else {
                echo 'Error executing query';
            }
           }
        ?>
    </div>

    <br><br><br>

</body>
<?php include 'footer.php'; ?>

</html>