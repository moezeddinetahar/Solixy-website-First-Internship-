<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SOLIXY.Eccount</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<style>
.commande-form {
    font-family: Arial, sans-serif;
    justify-content: center;
    align-items: center;
    height: 75vh;
    margin: 0;
    padding-left: 30%;
}

form {
    background-color: #ffffff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
}

label {
    display: block;
    margin-bottom: 0.5rem;
    color: black;
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
    background-color: #4CAF50;
    color: white;
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #45a049;
}

.info1 {
    background: #FE650E;
    margin: 0;
    font-family: sans-serif;
}

.s-info {
    color: #fff;
}

.s-info .row {
    display: flex;
    justify-content: center;
}

.s-info .row>div {
    margin: 0 20px;
    text-align: center;
}

.s-info .row>div h2 {
    font-size: 86px;
    letter-spacing: 2px;
    margin-bottom: 0;
}

.s-info .row>div p {
    margin-top: 0;
}

#r1 {
    color: #FE650E;
    font-weight: bold;
    font-size: 36px;
}

#r2 {
    color: red;
    font-weight: bold;
    font-size: 50px;
}

video {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -1;
}

.titre-bas {
    background: black;
    color: white;
    text-align: center;
    padding: 120px;
    font-family: 'Arial', sans-serif;
    font-size: 2rem;
}
</style>

<?php include 'home_header.php'; ?>

<body>

    <video autoplay muted loop>

        <source src="/Solixy web-site/v.1/videos/office.mp4" type="video/mp4">
    </video>
    <?php
    session_start();
    $firstname = isset($_SESSION['firstname']) ? $_SESSION['firstname'] : '';
    $family = isset($_SESSION['family']) ? $_SESSION['family'] : '';
    ?>
    <h1 id="r2">&nbsp;Bonjour, <?php echo $firstname . ' ' . $family; ?> ! </h1> <br>
    <h2 style="color:red;">&nbsp;&nbsp;Site en amélioration ! De retour bientôt. <br>&nbsp;&nbsp;Merci de votre
        compréhension.</h2>
    <br><br>

    <div class="commande-form">

        <h1 id='r1'>Votre commande</h1>

        <form method="post" id="contact-form">
            <label for="domaine">Domaine</label>
            <select id="type" name="type">
                <option value="Consulting">Consulting</option>
                <option value="Software Development">Software Development</option>
                <option value="Web Development">Web Development</option>
                <option value="Mobile Application Development">Mobile Application Development</option>
                <option value="Stripe Payments">Stripe Payments</option>
            </select><br><br>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required />

            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" required />

            <label for="message">Message</label>
            <textarea id="message" name="message" required></textarea>

            <label for="remarque">Remarque</label>
            <textarea id="remarque" name="remarque" required></textarea>

            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
    <?php


require 'config.php';

if (isset($_POST["submit"])) {
    $type=$_POST['type'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $remarque = $_POST['remarque'];

    $sql = "INSERT INTO commande (type, email, phone, message,remarque) VALUES ('$type', '$email', '$phone', '$message','$remarque')";

    mysqli_query($db, $sql);
   
}

?>

    <br><br><br><br><br><br><br><br><br>

    <div class="titre-bas">
        <h1>Digital Strategy and <br>Transformation</h1>
    </div>

</body>

<?php include 'home_footer.php'; ?>

</html>