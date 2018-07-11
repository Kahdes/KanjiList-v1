<?php $this->title = "Kanji List : hiraganas & katakanas"; ?>
<?php $this->description = "Découvrez les hiraganas et les katakanas !";?>

<?php require_once('View/slider.php');?>

<div class="row" id="home-hira-kata">
	<article class="col-12 bg-light pt-2 pb-2">
		<h3 class="col-12 text-center">Les alphabets japonais</h3>
		<hr/>
	</article>
</div>

<div class="row" id="home-kanji">
	<article class="col-12 bg-light pt-2 pb-2">
		<h3 class="col-12 text-center">Les derniers kanji</h3>
		<hr/>
		<div class="card-columns">
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
	</article>
</div>