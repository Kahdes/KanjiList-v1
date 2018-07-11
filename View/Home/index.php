<?php $this->title = "Kanji List : accueil"; ?>
<?php $this->description = "Découvrez nos solutions pour vous aider à apprendre le japonais !";?>

<?php require_once('View/slider.php');?>

<div class="row" id="home-hira-kata">
	<article class="col-12 bg-light pt-2 pb-2 mx-auto">
		<h3 class="col-12 text-center display-4">Les alphabets japonais</h3>
		<hr/>
		<p class="lead text-center">Apprenez-en plus sur les différents alphabets japonais en consultant nos tableau récapitulatifs !</p>
	</article>

	<a href="Alphabets/hiragana" class="col-12 col-md-4 mx-auto kanji-card p-0">
		<div class="card bg-info text-white text-center pt-3 pb-3">
			<h4 class="mb-1">Hiragana</h4>
		</div>
	</a>
	
	<a href="Alphabets/katakana" class="col-12 col-md-4 mx-auto kanji-card p-0">
		<div class="card bg-info text-white text-center pt-3 pb-3">
			<h4 class="mb-1">Katakana</h4>
		</div>
	</a>	
</div>

<div class="row" id="home-kanji">
	<article class="col-12 bg-light pt-2 pb-2">
		<h3 class="col-12 text-center display-4">Les derniers kanji</h3>
		<hr/>
		
	</article>

	<div class="col-12 card-columns">
<?php
	foreach ($list as $l) {
		if (strlen($l['signification']) > 30) {
			$l['signification'] = substr($l['signification'], 0, 30) . '...';
		}
?>
			<a class="card bg-dark kanji-card" href="Research/kanji/<?=$l['id'];?>">
				<div class="card-header text-center text-white">
					<h4 class="card-title display-4 mb-0"><?=$l['kanji'];?></h4>
				</div>
			</a>
<?php
	}
?>
		</div>
</div>