<?php $this->title = "Kanji List : " . $title['kanji']; ?>
<?php $this->description = "Découvrez le sens, les lectures ainsi que le tracé du kanji que vous cherchez";?>

<section class="row justify-content-center py-3" id="result-title">
	<article class="col-12 text-center">
		<h2 class="display-4">Résultat de recherche</h2>
		<hr class="mb-0" />
	</article>
</section>

<section class="row justify-content-center py-3" id="results">
<?php
	foreach ($kanji as $k) {
		if (preg_match('/(\(\d\))/', $k['kanji'])) {
			$version = preg_split('/^([一-龯]){1,}/', $k['kanji']);
			$k['kanji'] = preg_replace('/\(\d\)/', '', $k['kanji']);
		}
?>
	<article class="col-12 col-sm-10 text-center table-responsive-sm">
		<table class="table table-bordered table-hover m-0">
			<thead class="thead-dark text-center">
				<tr>
					<th colspan="2">
						<h2 class="m-0 display-4" id="r-kanji"><?=$k['kanji'];?></h2>
					</th>
				</tr>
			</thead>
			
			<tbody class="dark">
				<tr>
					<td class="category">
						<strong>Singification</strong>
					</td>
					<td class="result-data">
						<?= ucfirst($k['meaning']);?>							
					</td>
				</tr>

				<tr>
					<td class="category">
						<strong>On'yomi</strong>
						<hr class="my-3" />
						<em>Katakana</em>
					</td>
					<td class="result-data">
						<?=$k['chinese'];?>
						<hr class="my-3" />
						<span id="r-onyomi"></span>
					</td>
				</tr>

				<tr>
					<td class="category">
						<strong>Kun'yomi</strong>
						<hr class="my-3" />
						<em>Hiragana</em>
					</td>
					<td class="result-data">
						<?=$k['japanese'];?>
						<hr class="my-3" />
						<span id="r-kunyomi"></span>		
					</td>
				</tr>
			</tbody>

			<tfoot class="tfoot-light">
				<tr>
					<td colspan="2">
						<a class="col-12 col-sm-5 d-none btn btn-warning mb-3 mb-sm-0 text-dark" id="r-video" target="_blank">Vidéo du tracé</a>
						<a class="col-12 col-sm-5 btn btn-warning" href="https://fr.wiktionary.org/wiki/<?=$k['kanji'];?>" target="_blank">
							Wiktionary de <?=$k['kanji'];?>			
						</a>						
					</td>
				</tr>
<?php
	if ($account === 1) {
?>
				<tr>
					<th colspan="2">
						<form action="Panel/addItem/<?=$k['id'];?>" method="post" class="inline-form">
							<button class="btn btn-info">Ajouter ce kanji à ma liste</button>
						</form>
					</th>
				</tr>
<?php
	} elseif ($account === 2) {
?>
				<tr class="custom-success">
					<th colspan="2">
						<p class="lead m-0">Ce kanji se trouve dans votre liste</p>
					</th>
				</tr>
<?php
	}
?>
			</tfoot>
		</table>		
	</article>
<?php
	}
?>
</section>

<section class="row justify-content-center pt-0 pb-3" id="result-return">
	<article class="col-12 text-center">
		<a class="btn btn-link" href="Research/index">Retour à la page de Recherche</a>
	</article>
</section>
