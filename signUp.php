<!-- Page de Sign up -->
<?php include_once("inc/header.php"); ?>

<main>
    <h1 id="h1-sign">Inscription</h1>

    <form action="./traitement.php" method="post">
        <div id="username-sign-div">
            <input type="text" name="username-sign" id="username-sign" placeholder="Votre Nom d'utilisateur" required>
        </div>
        <div id="email-sign-div">
            <input type="email" name="email-sign" id="email-sign" placeholder="Votre Courriel" required>
        </div>
        <div id="password-sign-div">
            <input type="password" name="password-sign" id="password-sign" placeholder="Votre Mot de passe" required>
        </div>

        <div id="btnSubmit-sign-div">
            <input type="hidden" name="Action" value="signUp" action="signUp">
            <button type="submit">S'inscrire</button>
        </div>
    </form>
</main>


<?php include_once("inc/footer.php") ?>