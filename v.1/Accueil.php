<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOLIXY</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="/Solixy%20web-site/v.1/style.css">



    <style>
    .contact-form {
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

    .description {
        color: rgb(255, 255, 255);
        font-weight: bold;
        font-size: 18px;
    }

    #r1 {
        color: #FE650E;
        font-weight: bold;
        font-size: 36px;
    }
    </style>
</head>


<body>
    <?php include'C:/wamp64/www/Solixy web-site/v.1/header.php'; ?>

    <video autoplay muted loop>

        <source src="/Solixy web-site/v.1/videos/office.mp4" type="video/mp4">
    </video>

    <br><br>
    <h1 id='r1'>Description </h1><br>
    <section class="description">
        <p style="padding-left: 5px;">Startup digitale depuis 2017.<br>
            Notre vision complémentaire nous permet de vous accompagner efficacement dans l’alignement
            Marketing/Ventes,<br> indispensable pour obtenir un retour sur investissement avec le Marketing Digital &
            l'Intelligence Artificielle.
            Cet avantage unique, nous permet de vous aider à :<br></p>
        <p style="padding-left: 20px;">▸︎ Générer des leads qualifiés et matures<br>
            ▸︎ Convertir plus vite et plus souvent vos leads en clients<br>
            ▸︎ Offrir une expérience unique à l’acheteur
        </p><br><br><br>

        <section class="info1">
            <span id="info" class="s-info">
                <div class="row">
                    <div>
                        <h2>2017</h2>
                        <p>Fondation</p>
                    </div>
                    <div>
                        <h2>+40</h2>
                        <p>Clients</p>
                    </div>
                    <div>
                        <h2>10</h2>
                        <p>Collaborateurs</p>
                    </div>
                    <div>
                        <h2>3</h2>
                        <p>Produits</p>
                    </div>
                </div>
            </span>
        </section><br><br>

        <div class="contact-form">

            <h1 id='r1'>Get In Touch</h1>

            <form method="post" id="contact-form">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required />

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required />

                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" required />

                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit" name="submit">Submit</button>
            </form>
            <?php


require 'config.php';

if (isset($_POST["submit"])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO get_in_touch (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

    mysqli_query($db, $sql);
   
}

?>

        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d928.8348362317505!2d10.10293599992188!3d33.863126744045196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12556fd035406531%3A0x5666e761143e2992!2sSolixy!5e1!3m2!1sfr!2stn!4v1703796084450!5m2!1sfr!2stn"
            width="1515" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <br><br><br><br><br><br>
</body>


<?php include 'C:/wamp64/www/Solixy web-site/v.1/footer.php';?>

</html>