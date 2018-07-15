<?php $this->title = "Erreur"; ?>
<?php $this->description = ""; ?>

<section class="row" id="error">
	<article class="col-12 alert alert-danger m-0" id="error-alert">
		<h2>Erreur :</h4>
		<p><?= $msg;?></p>
		<a class="btn btn-primary" href="Home/index">Retour à l'accueil</a>
	</article>
</section>