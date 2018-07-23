<?php $this->title = "Kanji List : recherche par kanji"; ?>
<?php $this->description = "Cherchez un kanji selon son idéogramme";?>

<section class="row justify-content-center py-3" id="kanji-title">
	<article class="col-12 text-center pb-2">
		<h2 class="display-4">Recherche par kanji</h2>
		<hr/>
		<p class="lead m-0">Renseignez le ou les idéogrammes du kanji que vous souhaitez trouver</p>
	</article>
</section>

<section class="row justify-content-center py-3" id="kanji-opt">
	<article class="col-12 col-sm-10 text-center">
		<form action="Research/kanji" method="post" class="form" id="kanji-form">
			<label class="sr-only" for="research-k">Kanji</label>
			<div class="input-group mb-4">
				<div class="input-group-prepend">
					<div class="input-group-text bg-dark text-white">Kanji</div>
					</div>
				<input class="form-control form-control-lg research" type="text" name="research-k" id="research-k" placeholder="Ex : 金" required />
			</div>
			<button class="form-control form-control-lg btn btn-lg btn-warning sub" type="submit">Rechercher</button>
		</form>
	</article>	
</section>

<?php
	if (isset($list) || isset($result)) {
		require_once('Shared/research_match.php');
	}
?>