<?php $this->title = "Kanji List : recherche par Kun'yomi"; ?>
<?php $this->description = "Découvrez nos solutions pour vous aider à apprendre le japonais !";?>

<section class="row justify-content-center py-3" id="kunyomi-title">
	<article class="col-12 text-center pb-2">
		<h2 class="display-4">Recherche par Kun'yomi</h2>
		<hr/>
		<p class="lead m-0">Renseignez la lecture japonaise (kun'yomi) du kanji que vous souhaitez trouver</p>
	</article>
</section>

<section class="row" id="kunyomi-opt">
	<article class="col-12 pt-2 pb-4 mx-auto">
		<div class="col-12 col-sm-10 col-md-8 text-center mx-auto">
			<button class="btn btn-info btn-block" id="kunyomi-btn">
				<strong>Lecture japonaise</strong>
			</button>

			<form action="" method="">
				<label class="sr-only" for="from-c1">Kun'yomi</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">Kun'yomi</div>
					</div>
					<input class="form-control" type="text" name="" id="from-c1" placeholder="Ex : kane" />
				</div>
			</form>
		</div>
	</article>	
</section>