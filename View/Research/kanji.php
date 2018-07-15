<?php $this->title = "Kanji List : " . $title['kanji']; ?>
<?php $this->description = "Découvrez nos solutions pour vous aider à apprendre le japonais !";?>

<div class="row">
	<article class="col-12 pt-4 pb-4 bg-light">
		
<?php
	foreach ($kanji as $k) {
?>
	<div class="col-12 col-sm-6 card kanji-card bg-dark text-center text-white mx-auto">
		<div class="card-head">
			<h3 class="display-3" id="research-kanji"><?=$k['kanji'];?></h3>
		</div>
		<hr class="m-0" />
		<div class="card-body bg-ligh">
			<p><?=$k['chinese'];?>/<?=$k['japanese'];?></p>
			<p class="lead m-0"><?= ucfirst($k['meaning']);?></p>
		</div>
		<div class="card-footer">
			<a class="btn btn-warning" href="https://fr.wiktionary.org/wiki/<?=$k['kanji'];?>">
				Wiktionary de <?=$k['kanji'];?>			
			</a>
		</div>		
	</div>
<?php
	}
?>		
	</article>
</div>