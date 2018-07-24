<section class="row justify-content-center py-3" id="rResults">
<?php
	if (isset($list)) {
?>
	<article class="col-12 col-sm-10 text-center table-responsive-sm">
		<table class="table table-bordered table-striped table-hover m-0">
			<thead class="thead-dark text-center">
				<tr>
					<th colspan="3">
						<h3 class="m-0">Correspondances</h3>
					</th>					
				</tr>
				<tr>
					<th scope="col"><h4 class="m-0">Kanji</h4></th>
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
<?php
	} elseif (isset($result)) {
?>
	<article class="col-12 col-sm-10 text-center">
		<h2><?=$result;?></h2>
	</article>
<?php
	}
?>
</section>	