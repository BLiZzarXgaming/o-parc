<?php include_once("inc/header.php"); ?>

<section class="sondagesHeader">
    <h2>Questions concernant les espaces verts visités</h2>
</section>

<section >
    <form method="post" >
        <fieldset class="sondages">
            <legend><h3>Parc La Fontaine</h3></legend>
            <label for="avis">Qu'avez vous pensé de cet espace vert? :</label>
            <textarea name="avis" id="avis" rows="3"></textarea>
            <hr><br>
            <label>Le recommanderiez-vous à d'autres personnes? : </label><br>
            <div class="sondages sondageflex">
                <aside>
                    <label for="recommande">Oui</label>
                    <input type="radio" name="recommande" id="recommande" value="Oui">
                </aside>
                <aside>
                    <label for="recommande">Non</label>
                    <input type="radio" name="recommande" id="recommande" value="Non">
                </aside>
            </div>
            <div class="buttondiv">
                <button type="submit">Envoyer</button>
            </div>
        </fieldset>
    </form>
    <form method="post" >
        <fieldset class="sondages">
            <legend><h3>Parc Jean-Drapeau</h3></legend>
            <label for="avis">Qu'avez vous pensé de cet espace vert? :</label>
            <textarea name="avis" id="avis" rows="3"></textarea>
            <hr><br>
            <label>Le recommanderiez-vous à d'autres personnes? : </label><br>
            <div class="sondages sondageflex">
                <aside>
                    <label for="recommande">Oui</label>
                    <input type="radio" name="recommande" id="recommande" value="Oui">
                </aside>
                <aside>
                    <label for="recommande">Non</label>
                    <input type="radio" name="recommande" id="recommande" value="Non">
                </aside>
            </div>
            <div class="buttondiv">
                <button type="submit">Envoyer</button>
            </div>
        </fieldset>
    </form>
</section>

<?php include_once("inc/footerMobile.php"); ?>