<?php $this->title = "Kanji List : connexion"; ?>
<?php $this->description = "";?>

<section class="row justify-content-around" id="connection">
	<article class="col-12 col-md-6 text-center py-4">
		<h2 class="display-4">Connexion</h2>
		<hr/>	
		<form action="Connection/connect" method="post">			
			<div class="form-group">
				<label class="lead" for="connect-id">Identifiant :</label>
				<input class="form-control" type="text" name="connect-id" id="connect-id" required />
			</div>
			<div class="form-group">
				<label class="lead" for="connect-pwd">Mot de passe :</label>
				<input class="form-control" type="password" name="connect-pwd" id="connect-pwd" required />
			</div>
			<button class="btn btn-block btn-info" type="submit">Se connecter</button>
		</form>
	</article>
</section>