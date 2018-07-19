<?php $this->title = "Kanji List : " . $title['kanji']; ?>
<?php $this->description = "Découvrez nos solutions pour vous aider à apprendre le japonais !";?>

<section class="row justify-content-center py-3" id="result-title">
	<article class="col-12 text-center">
		<h2 class="display-4">Résultat de recherche</h2>
		<hr class="mb-0" />
	</article>
</section>

<section class="row justify-content-center py-3" id="result-info">
<?php
	foreach ($kanji as $k) {
		if (preg_match('/(\(\d\))/', $k['kanji'])) {
			$version = preg_split('/^([一-龯]){1,}/', $k['kanji']);
			$k['kanji'] = preg_replace('/\(\d\)/', '', $k['kanji']);
		}
?>
	<article class="col-12 col-sm-10 col-md-6">
		<div class="card card kanji-card bg-dark text-center text-white">
			<div class="card-head">
				<h2 class="display-3" id="result-kanji">
					<?=$k['kanji'];?>
				</h2>
<?php
	if (isset($version)) {
?>
				<p>
					<small><?=$version[1];?></small>
				</p>
<?php
	}
?>				
			</div>

			<hr class="m-0"/>

			<div class="card-body">
				<h3 class="mb-4"><?=$k['chinese'];?>/<?=$k['japanese'];?></h3>
				<p class="lead m-0"><?= ucfirst($k['meaning']);?></p>
			</div>

			<div class="card-footer">
				<a class="btn btn-warning" href="https://fr.wiktionary.org/wiki/<?=$k['kanji'];?>">
					Wiktionary de <?=$k['kanji'];?>			
				</a>
			</div>
		</div>		
	</article>
<?php
	}
?>
</section>
