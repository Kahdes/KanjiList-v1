<?php $this->title = "Kanji List : " . $title['kanji']; ?>
<?php $this->description = "Découvrez nos solutions pour vous aider à apprendre le japonais !";?>

<section class="row justify-content-center" id="kanji-info">

<?php
	foreach ($kanji as $k) {
?>
	<article class="col-12 col-sm-10 col-md-6">
		<div class="card card kanji-card bg-dark text-center text-white my-4">
			<div class="card-head">
				<h2 class="display-3" id="research-kanji"><?=$k['kanji'];?></h2>
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