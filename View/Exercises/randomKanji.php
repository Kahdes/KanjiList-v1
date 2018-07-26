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
	<article class="col-12 col-md-8 text-center">		
<?php
	foreach ($question as $q) {
?>
		<form action="Exercises/result/<?=$q['id_kanji'];?>" method="post">
			<div class="card text-center text-white bg-dark">
				<div class="card-header">
					<h2 class="card-title display-4 m-0"><?=$q['question'];?></h2>
				</div>
				
				<div class="card-body">
					<div class="custom-control custom-radio custom-control-inline">
						<input class="custom-control-input" type="radio" id="qcm-1" name="qcm-opt" value="<?=$q['r1'];?>" />
						<label class="custom-control-label" for="qcm-1"><?=$q['r1'];?></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					  	<input class="custom-control-input" type="radio" id="qcm-2" name="qcm-opt" value="<?=$q['r2'];?>" />
					  	<label class="custom-control-label" for="qcm-2"><?=$q['r2'];?></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					  	<input class="custom-control-input" type="radio" id="qcm-3" name="qcm-opt" value="<?=$q['r3'];?>" />
					  	<label class="custom-control-label" for="qcm-3"><?=$q['r3'];?></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					  	<input class="custom-control-input" type="radio" id="qcm-4" name="qcm-opt" value="<?=$q['r4'];?>" />
					  	<label class="custom-control-label" for="qcm-4"><?=$q['r4'];?></label>
					</div>
				</div>				
			</div>
			<button class="form-control form-control-lg btn btn-lg btn-warning sub mt-3" type="submit">Soumettre</button>
		</form>
<?php
	}
?>			
	</article>
</section>