<?php $this->title = "Kanji List : sélection de l'exercice"; ?>
<?php $this->description = "Exercez-vous aux différents alphabets et aux kanjis aux travers de QCM !";?>

<section class="row justify-content-center py-3" id="exercises-title">
	<article class="col-12 text-center pb-2">
		<h2 class="display-4">Kanji aléatoire</h2>
		<hr/>
		<p class="lead m-0">
		</p>
	</article>
</section>

<section class="row justify-content-center pb-3" id="exercises-choices">
	<article class="col-12 text-center">
		<form>
<?php
	foreach ($r_kanji as $r) {
		$random = rand(1,4);
?>
		<h2><?=$r['kanji'];?></h2>

		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="kanji-opt" id="kanji-1" value="<?php ($random == 1) ? $r['kanji']:null ;?>" />
			<label class="form-check-label" for="kanji-1">a</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="kanji-opt" id="kanji-2" />
			<label class="form-check-label" for="kanji-2">a</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="kanji-opt" id="kanji-3" />
			<label class="form-check-label" for="kanji-3">a</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="kanji-opt" id="kanji-4" />
			<label class="form-check-label" for="kanji-4">a</label>
		</div>		
<?php
	}
?>
		</form>
	</article>
</section>