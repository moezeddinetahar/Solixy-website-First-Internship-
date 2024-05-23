<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOLIXY_Produit</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="style.css">

    <style>
    .product-list {
        display: flex;
        justify-content: space-between;
    }

    /* Ajoutez ces styles CSS pour le texte "Favori" */
    .favori-button.active {
        color: blue;
    }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>

    <h1>Nos produits</h1>

    <section>
        <div class="product-list">

            <!-- Produit 1 -->
            <div class="product">
                <img src="\Solixy web-site\v.1\photos\ecrocusbot.png" alt="Produit 1" />
                <h3>DATA SCIENCE</h3>
                <p>ECROCUSBOT</p>
                <p>Client : ECROCUS France</p>
                <button class="favori-button" onclick="toggleFavori(this)">LIKE : <span
                        class="favori-counter">0</span></button>
                <a href="https://chatbot.ecrocus.com/" target="_blank"><button>Visiter</button></a>
            </div>

            <!-- Produit 2 -->
            <div class="product">
                <img src="\Solixy web-site\v.1\photos\ecrocusbot.png" alt="Produit 2" />
                <h3>INTELLIGENCE ARTIFICIELLE</h3>
                <p>ECROCUSBOT</p>
                <p>Client : ECROCUS France</p>
                <button class="favori-button" onclick="toggleFavori(this)">LIKE : <span
                        class="favori-counter">0</span></button>
                <a href="https://chatbot.ecrocus.com/" target="_blank"><button>Visiter</button></a>
            </div>

            <!-- Produit 3 -->
            <div class="product">
                <img src="\Solixy web-site\v.1\photos\papercup.png" alt="Produit 3" />
                <h3>SOLUTIONS WEB/E-MARKETING</h3>
                <p>ECROCUSBOT</p>
                <p>Client : PAPERCUP TUNISIE</p>
                <button class="favori-button" onclick="toggleFavori(this)">LIKE : <span
                        class="favori-counter">0</span></button>
                <a href="https://www.papercup.com.tn/" target="_blank"><button>Visiter</button></a>
            </div>

            <!-- Produit 4 -->
            <div class="product">
                <img src="\Solixy web-site\v.1\photos\CONCEPTION DES VIDÉOS.png" alt="Produit 4" />
                <h3>CONCEPTION DES VIDÉOS PUBLICITAIRES</h3>
                <p>ECROCUSBOT</p>
                <p>Client : EXTRAPUB GABES TUNISIE</p>
                <button class="favori-button" onclick="toggleFavori(this)">LIKE : <span
                        class="favori-counter">0</span></button>
            </div>

            <!-- Produit 5 -->
            <div class="product">
                <img src="\Solixy web-site\v.1\photos\goblet.png" alt="Produit 5" />
                <h3>SCONCEPTION GRAPHIQUE DE GOBELETS</h3>
                <p>ECROCUSBOT</p>
                <p>Client : PAPERCUP TUNISIE</p>
                <button class="favori-button" onclick="toggleFavori(this)">LIKE : <span
                        class="favori-counter">0</span></button>
            </div>

            <!-- Produit 6 -->
            <div class="product">
                <img src="\Solixy web-site\v.1\photos\ETUDE DE LA ZONE DE CHALANDISE.png" alt="Produit 6"
                    width="200px" />
                <h3>SOLUTIONS DE REPORTING/BI</h3>
                <p>ETUDE DE LA ZONE DE CHALANDISE <br> Magasin renommé à l'échelle européenne</p>
                <p>Client en FRANCE</p>
                <button class="favori-button" onclick="toggleFavori(this)">LIKE : <span
                        class="favori-counter">0</span></button>
            </div>
            <!-- Ajoutez d'autres produits ici si nécessaire -->

        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script>
    // Fonction pour basculer le statut du favori et mettre à jour le compteur
    function toggleFavori(button) {
        const favoriButton = button;
        const favoriCounter = favoriButton.querySelector('.favori-counter');

        // Incrémente ou décrémente le compteur en fonction de l'état actuel du favori
        if (favoriButton.classList.contains('active')) {
            favoriCounter.textContent--;
        } else {
            favoriCounter.textContent++;
        }

        // Bascule la classe "active" pour indiquer l'état actuel du favori
        favoriButton.classList.toggle('active');
    }
    </script>
</body>

</html>