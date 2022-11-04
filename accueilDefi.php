<?php include_once("inc/header.php"); ?>

<main>
    <input type="hidden" id="tag-profile" value="dansAccueilDefi"> <!-- permet de savoir quelle icone -->

    <div id="prem-accueil-defi-div">
        <div role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:65" id="rond-accueil-defi">

        </div>
        <p>Félicitation! Vous avez visité un espace vert 5 fois cette semaine.</p>
    </div>

    <div id="deux-accueil-defi-div">
        <p>Le classement(Top 3):</p>
        <div>
            <i class="fa-solid fa-sun"></i>
            <p>Matias Beaulieux</p>
            <i class="fa-solid fa-caret-left"></i>
        </div>
        <div>
            <i class="fa-solid fa-star"></i>
            <p>Louis-Philippe Racettte</p>
            <i class="fa-solid fa-caret-left"></i>
        </div>
        <div>
            <i class="fa-solid fa-star"></i>
            <p>Justine Dauphinais</p>
            <i class="fa-solid fa-caret-left"></i>
        </div>
    </div>

    <div id="trois-accueil-defi-div">
        <i class="fa-solid fa-trophy"></i>
        <div>
            <p>Votre palier:</p>
            <p>Érable argenté</p>
        </div>
    </div>

    <div id="quat-accueil-defi-div">
        <div>
            <p>Objectifs</p>
            <div>
                <p>10 / 32</p>
                <a href="objectif.php"><i class="fa-solid fa-circle-chevron-left"></i></a>
            </div>
        </div>
        <div>
            <p>Défis</p>
            <div>
                <p>19 / 64</p>
                <a href="defis.php"><i class="fa-solid fa-circle-chevron-left"></i></a>
            </div>
        </div>
    </div>
</main>

<?php include_once("inc/footerMobile.php"); ?>