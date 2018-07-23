<?php $this->title = "Kanji List : connexion"; ?>
<?php $this->description = "Inscrivez-vous et profitez de nos outils personnalisés pour l'apprentissage du japonais !";?>

<section class="row justify-content-around" id="inscription">	
	<article class="col-12 col-md-6 text-center py-4">
		<h2 class="display-4">Inscription</h2>
		<hr/>
		<form action="Connection/index" method="post">
			<div class="form-group">
				<label class="lead" for="sign-id">Identifiant :</label>
				<input class="form-control" type="text" name="sign-id" id="sign-id" required />
			</div>
			<div class="form-group">
				<label class="lead" for="sign-pwd">Mot de passe :</label>
				<input class="form-control" type="password" name="sign-pwd" id="sign-pwd" required />
			</div>
			<button class="btn btn-block btn-info" type="submit">S'inscrire</button>
		</form>
	</article>
</section>