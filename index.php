<!-- Page de Login -->
<?php include_once("inc/header.php"); ?>

<main>
    <?php session_destroy(); ?>
    <h1 id="h1-log">Connection</h1>

    <form action="./traitement.php" method="post">
        <div id="username-log-div">
            <input type="text" name="username-log" id="username-log" placeholder="Nom d'utilisateur" required>
        </div>
        <div id="password-log-div">
            <input type="password" name="password-log" id="password-log" placeholder="Mot de passe" required>
        </div>

        <div id="btnSubmit-log-div">
            <input type="hidden" name="Action" value="Login">
            <button type="submit">Se connecter</button>
            <a href="signUp.php">S'inscrire</a>
        </div>
    </form>
</main>


<?php include_once("inc/footer.php") ?>