<?php include_once("inc/header.php"); ?>

<main>
<input type="hidden" id="tag-profile" value="dansMessage"> <!-- permet de savoir quelle icone -->

<div id="fil-message-all">
    <div class="message-autre">
        <p>Salut! Deviner c'est quoi.</p>
    </div>
    <div class="message-utilisateur">
        <p>Okay?</p>
    </div>
    <div class="message-autre">
        <img src="./images/emptypfp.png" alt="image profile vide" class="img-message-envoye">
    </div>
    <div class="message-utilisateur">
        <p>Un érable!</p>
    </div>
</div>

<div id="message-entre-util">
    <form action="message.php">
        <input type="text" name="message" id="message-util" placeholder="  Message">
        <button type="submit">
        <i class="fa-solid fa-circle-chevron-left"></i>
        </button>
    </form>
</div>

</main>

<?php include_once("inc/footerMobile.php"); ?>