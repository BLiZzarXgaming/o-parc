<?php include "./inc/header.php" ?>

<main id="accueil">
    
<input type="hidden" id="tag-profile" value="dansAccueil"> <!-- permet de savoir quelle icone -->

    <?php 
        if (isset($_SESSION['user'])) {
            echo '<h1>Salut <br> ' . $_SESSION['user']['nom'] . ' !</h1>';
        }
    ?>

    <div class="notif">
        <div class="circle"><i class="fa-sharp fa-solid fa-circle-exclamation"></i></div>

        <p class="col-11">Notification <br> 2 Nouveaux messages</p>
        
        <i class="fa-solid fa-circle-chevron-left col-1"></i>
    </div>
    <div class="notif">
        
        <div class="circle"><i class="fa-solid fa-award"></i></div>
        <p class="col-11">Défi: Parler à 2 inconnus</p>
        <div class="progressionBar"><div></div></div>

        <i class="fa-solid fa-circle-chevron-left up"></i>
    </div>
    <div class="notif">
        <div class="circle"><i class="fa-solid fa-trophy"></i></div>

        <p>Objectif: 10h dans un parc</p>
        <div class="progressionBar"><div></div></div>

        <i class="fa-solid fa-circle-chevron-left up"></i>
    </div>

    <h2>Arbre du jour</h2>

    <article>

        <img src="./images/erable_argente.jpg" alt="Erable Argenté">
        <p>

            L'érable à sucre <br>
            Il permet de faire du sirop d'érable !
            
        </p>

    </article>

</main>


<?php include "./inc/footerMobile.php" ?>