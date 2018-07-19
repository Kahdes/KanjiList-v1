<?php $this->title = "Kanji List : connexion"; ?>
<?php $this->description = "Découvrez nos solutions pour vous aider à apprendre le japonais !";?>

<section class="row justify-content-around" id="home">	
	<article class="col-12 col-md-5 py-4">
		<h2 class="display-4">Inscription</h2>
		<hr/>
		<form action="Connection" method="post">
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

	<article class="col-12 col-md-5 py-4">
		<h2 class="display-4">Connexion</h2>
		<hr/>	
		<form action="Connection" method="post">			
			<div class="form-group">
				<label class="lead" for="connect-id">Identifiant :</label>
				<input class="form-control" type="text" name="connect-id" id="connect-id" required />
			</div>
			<div class="form-group">
				<label class="lead" for="connect-pwd">Mot de passe :</label>
				<input class="form-control" type="password" name="connect-pwd" id="connect-pwd" required />
			</div>
			<div class="custom-control custom-checkbox mb-3">
				<input class="custom-control-input" type="checkbox" name="connect-stay" id="connect-stay" />
				<label class="custom-control-label" for="connect-stay">Rester connecter</label>				
			</div>
			<button class="btn btn-block btn-info" type="submit">Se connecter</button>
		</form>
	</article>
</section>