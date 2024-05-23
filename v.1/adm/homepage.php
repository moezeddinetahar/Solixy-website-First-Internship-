<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SOLIXY.Eccount</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="/Solixy%20web-site/v.1/style.css">
</head>
<style>
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



    <br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br>

    <div class="titre-bas">
        <h1>Digital Strategy and <br>Transformation</h1>
    </div>

</body>

<?php include '../footer.php';?>

</html>