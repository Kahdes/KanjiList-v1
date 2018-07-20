<?php $this->title = "Kanji List : recherche par On'yomi"; ?>
<?php $this->description = "Découvrez nos solutions pour vous aider à apprendre le japonais !";?>

<section class="row justify-content-center py-3" id="onyomi-title">
	<article class="col-12 text-center pb-2">
		<h2 class="display-4">Recherche par On'yomi</h2>
		<hr/>
		<p class="lead m-0">Renseignez la lecture chinoise (On'yomi) du kanji que vous souhaitez trouver</p>
	</article>
</section>

<section class="row justify-content-center py-3" id="onyomi-opt">
	<article class="col-12 col-sm-10 text-center">
		<form action="Research/onyomi" method="post" class="form" id="onyomi-form">
			<label class="sr-only" for="research-on">On'yomi</label>
			<div class="input-group mb-4">
				<div class="input-group-prepend">
					<div class="input-group-text bg-dark text-white">On'yomi</div>
					</div>
				<input class="form-control form-control-lg research" type="text" name="research-on" id="research-on" placeholder="Ex : KIN/KON" required />
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