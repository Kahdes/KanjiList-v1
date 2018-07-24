<?php $this->title = "Kanji List : accueil"; ?>
<?php $this->description = "Découvrez nos solutions pour vous aider à apprendre le japonais !";?>

<?php require_once('View/slider.php');?>

<section class="row justify-content-center bg-dark pt-3 pb-4" id="home-title">
	<article class="col-12 text-white text-center pb-2">
		<h2 class="display-4">Les alphabets japonais</h3>
		<hr/>
		<p class="lead">Apprenez-en plus sur les différents <strong>alphabets japonais</strong> en consultant nos tableaux récapitulatifs !</p>
	</article>

	<article class="col-12 col-md-5 text-center mb-4 mb-md-0">
		<a class="alphabet-card text-dark" href="Alphabets/hiragana"  title="Vers la section Hiragana">
			<div class="card bg-warning py-3">
				<h3 class="m-0">Hiragana</h4>
			</div>
		</a>
	</article>

	<article class="col-12 col-md-5 text-center">
		<a class="alphabet-card text-dark" href="Alphabets/katakana" title="Vers la section Katakana">
			<div class="card bg-warning py-3">
				<h3 class="m-0">Katakana</h4>
			</div>
		</a>
	</article>
</section>

<section class="row justify-content-center py-3" id="home-kanji">
	<article class="col-12 text-center pb-2">
		<h2 class="display-4">6 Kanji aléatoires : </h3>
		<hr/>
		<p class="lead">Cliquez sur un kanji afin de voir plus d'informations le concernant !</p>
	</article>

	<article class="col-12 card-columns" id="home-kanji-columns">
<?php
	foreach ($random as $r) {
?>
		<a class="card bg-dark text-center text-white kanji-card" href="Research/result/<?=$r['id'];?>" title="Vers <?=$r['kanji'];?>">
			<div class="card-header">
				<h3 class="card-title display-4 m-0"><?=$r['kanji'];?></h4>
			</div>
		</a>
<?php
	}
?>
	</article>
</section>