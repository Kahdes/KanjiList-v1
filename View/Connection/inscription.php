<?php $this->title = "Kanji List : connexion"; ?>
<?php $this->description = "Inscrivez-vous et profitez de nos outils personnalisés pour l'apprentissage du japonais !";?>

<section class="row justify-content-around py-3" id="inscription">
    <article class="col-12 col-md-6 text-center">
        <h2 class="display-4">Inscription</h2>
        <hr/>
        <form action="Connection/signIn" method="post" id="sign-in">
            <div class="form-group">
                <label class="lead" for="sign-pseudo">Pseudo :</label>
                <input class="form-control form-control-lg" type="text" name="sign-pseudo" id="sign-pseudo" maxlength="20" required />
                <p class="alert alert-info">Le pseudo ne peut contenir que des chiffres , des lettres et _</p>
            </div>
            <div class="form-group">
                <label class="lead" for="sign-pwd">Mot de passe :</label>
                <input class="form-control form-control-lg" type="password" name="sign-pwd" id="sign-pwd" required />
            </div>
            <div class="form-group">
                <label class="lead" for="sign-conf">Confirmer le mot de passe :</label>
                <input class="form-control form-control-lg" type="password" name="sign-conf" id="sign-conf" required />
                <p class="d-none alert alert-danger" id="conf-danger">Les mots de passe ne sont pas identiques</p>
            </div>
            <button class="btn btn-block btn-warning" type="submit">S'inscrire</button>
        </form>
    </article>
</section>
