<?php $this->title = "Kanji List : accueil"; ?>
<?php $this->description = "Découvrez nos solutions pour vous aider à apprendre le japonais !";?>

<?php require_once('View/slider.php');?>

<div class="row text-white bg-dark pt-4 pb-4" id="home-hira-kata">
	<article class="col-12 text-center pb-2 mx-auto">
		<h3 class="display-4">Les alphabets japonais</h3>
		<hr/>
		<p class="lead">Apprenez-en plus sur les différents alphabets japonais en consultant nos tableau récapitulatifs !</p>
	</article>

	<a href="Alphabets/hiragana" class="col-10 col-md-5 alphabet-card mx-auto p-0">
		<div class="card bg-info text-center pt-3 pb-3 mx-auto">
			<h4 class="text-white m-0">Hiragana</h4>
		</div>
	</a>
	
	<a href="Alphabets/katakana" class="col-10 col-md-5 alphabet-card mx-auto p-0">
		<div class="card bg-info text-center pt-3 pb-3 mx-auto">
			<h4 class="text-white m-0">Katakana</h4>
		</div>
	</a>	
</div>

<div class="row pt-3 pb-2" id="home-kanji">
	<article class="col-12 bg-light">
		<h3 class="col-12 text-center display-4">6 Kanji aléatoires : </h3>
		<hr/>
	</article>

	<div class="col-12 card-columns">
<?php
	foreach ($random as $r) {
?>
		<a class="card bg-dark kanji-card" href="Research/kanji/<?=$r['id'];?>">
			<div class="card-header text-center text-white">
				<h4 class="card-title display-4 mb-0"><?=$r['kanji'];?></h4>
			</div>
		</a>
<?php
	}
?>
	</div>
</div>