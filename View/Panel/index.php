<?php $this->title = "Kanji List : tableau de bord"; ?>
<?php $this->description = "Bienvenue sur votre tableau de bord ! Retrouvez rapidement tous les kanji que vous avez marqués sur le site.";?>

<section class="row justify-content-center pt-3 pb-0" id="panel-title">
	<article class="col-12 text-center">
		<h2 class="display-4">Tableau de bord</h2>
		<hr/>
		<p class="m-0 lead"><?=$pseudo;?></p>
	</article>
</section>

<section class="row justify-content-center py-3" id="panel-results">	
<?php
	if (isset($list)) {
?>
	<article class="col-12 col-sm-10 text-center table-responsive-sm">
		<table class="table table-bordered table-striped table-hover m-0">
			<thead class="thead-dark text-center">
				<tr>
					<th colspan="3">
						<h3 class="m-0">Ma liste de kanji</h3>
					</th>					
				</tr>
				<tr>
					<th scope="col"><h4 class="m-0">Kanji</h4></td>
					<th scope="col"><h4 class="m-0">Signification</h4></th>
					<th scope="col"><h4 class="m-0">Statut</h4></th>
				</tr>
			</thead>

			<tbody class="bg-light text-center">

<?php	
	foreach ($list as $l) {
?>
			<tr>
				<td class="pt-3" id="panel-kanji">
					<a href="Research/result/<?=$l['id_kanji'];?>">
						<h4><?=$l['kanji'];?></h4>
					</a>
				</td>

				<td class="lead pt-3" id="panel-meaning">
					<?=ucfirst($l['meaning']);?>
				</td>

				<td class="py-3" id="panel-progress">
					<div class="progress">
<?php
	if ($l['state'] == 0) {
?>
						<div class="progress-bar custom-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">0%</div>
<?php
	} else {
?>
						<div class="progress-bar custom-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
<?php
	}
?>
					</div>
				</td>				
			</tr>
<?php
		}
?>
			</tbody>
		</table>
	</article>
<?php
	} elseif (isset($result)) {
?>
	<article class="class="col-12 col-sm-10 text-center">
		<h2><?=$result;?></h2>
	</article>
<?php
	}
?>
	</article>
</section>