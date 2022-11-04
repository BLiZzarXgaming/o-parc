<?php if (session_status() === PHP_SESSION_NONE) {
    session_start();
}  ?>

<!DOCTYPE html>
<html lang="fr-ca">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js"></script>
    <!-- font Fjalla One -->
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E
    <link rel=" preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Pacifico&family=Poppins:wght@200&display=swap" rel="stylesheet">
    <!-- Pour les icones -->
    <script src="https://kit.fontawesome.com/5340d2abc4.js" crossorigin="anonymous"></script>
    <title>O'Parc</title>
</head>

<body>
    <header>
        <div>
            <label for="bouttonMenuDeroulant">
                <input type="checkbox" id="bouttonMenuDeroulant" onclick="animMenu()">
                <img src="./images/menu_icon.png" alt="Menu Icon" class="menuderoulant" width="50px" />
            </label>
            <img src="./images/Image1.png" alt="Logo" width="75px" />
            <img id="pfp" src="./images/emptypfp.png" alt="Logo" width="75px" />
        </div>

        <div>
            <nav id="navig">
                <script src="./javascript/animMenu.js"></script>
                <ul>
                    <li><a href="./espacesVerts.php">La carte</a></li>
                    <li><a href="./sondages.php">Sondages</a></li>
                    <li><a href="./accueil.php">Réglages</a></li>
                </ul>
            </nav>
        </div>

        <div id="message-expand-div"></div>


    </header>
    <main>