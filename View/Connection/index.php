<?php $this->title = "Kanji List : connexion"; ?>
<?php $this->description = "Découvrez nos solutions pour vous aider à apprendre le japonais !";?>

<section class="row" id="home">
	<article class="col-12 col-sm-8 mx-auto pt-3 pb-4">
		<form action="" method="post">
			<div class="form-group">
				<label class="lead" for="connect-id">Identifiant :</label>
				<input class="form-control" type="text" name="connect-id" id="connect-id" required />
			</div>
			<div class="form-group">
				<label class="lead" for="connect-pwd">Mot de passe :</label>
				<input class="form-control" type="password" name="connect-pwd" id="connect-pwd" required />
			</div>
			<div class="custom-control custom-checkbox mb-3">
				<input class="custom-control-input" type="checkbox" name="connect-stay" id="connect-stay" required />
				<label class="custom-control-label" for="connect-stay">Rester connecter</label>				
			</div>
			<button class="btn btn-block btn-info" type="submit">Se connecter</button>
		</form>
	</article>
</section>