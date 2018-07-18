<?php $this->title = "Kanji List : recherche par Kun'yomi"; ?>
<?php $this->description = "Découvrez nos solutions pour vous aider à apprendre le japonais !";?>

<section class="row justify-content-center py-3" id="kunyomi-title">
	<article class="col-12 text-center pb-2">
		<h2 class="display-4">Recherche par Kun'yomi</h2>
		<hr/>
		<p class="lead m-0">Renseignez la lecture japonaise (kun'yomi) du kanji que vous souhaitez trouver</p>
	</article>
</section>

<section class="row justify-content-center py-3" id="kunyomi-opt">
	<article class="col-12 col-sm-10 text-center">
		<form action="Research/kunyomi" method="post">
			<label class="sr-only" for="research-ku">Kun'yomi</label>
			<div class="input-group mb-4">
				<div class="input-group-prepend">
					<div class="input-group-text bg-dark text-white">Kun'yomi</div>
					</div>
				<input class="form-control form-control-lg" type="text" name="research-ku" id="research-ku" placeholder="Ex : kane" required />
			</div>
			<input class="form-control form-control-lg btn btn-warning" type="submit" value="Rechercher" />
		</form>
	</article>	
</section>


<?php
	if (isset($list)) {
?>
<section class="row justify-content-center py-3" id="kunyomi-results">
	<article class="col-12 col-sm-10 text-center table-responsive-sm">
		<table class="table table-bordered table-striped table-hover m-0">
			<thead class="thead-dark text-center">
				<tr>
					<th colspan="3">
						<h3 class="m-0">Correspondances</h3>
					</th>					
				</tr>
				<tr>
					<th scope="col"><h4 class="m-0">Kanji</h4></td>
					<th scope="col"><h4 class="m-0">Lectures</h4></th>
					<th scope="col"><h4 class="m-0">Signification</h4></th>
				</tr>
			</thead>

			<tbody class="bg-light text-center">
<?php
		foreach ($list as $l) {
?>
			<tr>
				<td class="pt-3">
					<a href="Research/result/<?=$l['id'];?>">
						<h4><?=$l['kanji'];?></h4>
					</a>
				</td>

				<td>
					<?=$l['chinese'];?>
					<br/>
					<em><?=$l['japanese'];?></em>
				</td>

				<td class="lead pt-3">
					<?=ucfirst($l['meaning']);?>
				</td>
			</tr>
<?php
		}
?>
			</tbody>
		</table>
	</article>
</section>
<?php
	}
?>