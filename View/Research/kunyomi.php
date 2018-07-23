<?php $this->title = "Kanji List : recherche par Kun'yomi"; ?>
<?php $this->description = "Cherchez un kanji selon sa lecture japonaise : Kun'yomi";?>

<section class="row justify-content-center py-3" id="kunyomi-title">
	<article class="col-12 text-center pb-2">
		<h2 class="display-4">Recherche par Kun'yomi</h2>
		<hr/>
		<p class="lead m-0">Renseignez la lecture japonaise (kun'yomi) du kanji que vous souhaitez trouver</p>
	</article>
</section>

<section class="row justify-content-center py-3" id="kunyomi-opt">
	<article class="col-12 col-sm-10 text-center">
		<form action="Research/kunyomi" method="post" class="form" id="kunyomi-form">
			<label class="sr-only" for="research-ku">Kun'yomi</label>
			<div class="input-group mb-4">
				<div class="input-group-prepend">
					<div class="input-group-text bg-dark text-white">Kun'yomi</div>
					</div>
				<input class="form-control form-control-lg research" type="text" name="research-ku" id="research-ku" placeholder="Ex : kane" required />
			</div>
			<input class="form-control form-control-lg btn btn-warning sub" type="submit" value="Rechercher" />
		</form>
	</article>	
</section>

<?php
	if (isset($list) || isset($result)) {
		require_once('Shared/research_match.php');
	}
?>