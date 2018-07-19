<section class="row justify-content-center" id="alphabet-table">
	<article class="col-12 col-sm-10 text-center pb-3">
		<table class="table table-striped table-bordered table-hover table-dark m-0">
			<thead class="thead-light">
				<tr>
					<th colspan="5">
						<h3 class="m-0">Table des Hiragana</h3>
					</th>					
				</tr>
				<tr>
					<th><h4>A</h4></td>
					<th><h4>I</h4></th>
					<th><h4>U</h4></th>
					<th><h4>E</h4></th>
					<th><h4>O</h4></th>
				</tr>
			</thead>

			<tbody>
<?php
	foreach ($letters as $l) {
		//CELLULE TYPE
		$signInfo = $l['sign'] . '<br/><strong>' . $l['reading'] . '</strong>';

		//CAS PARTICULIER DES Yx
		if ($l['reading'] === 'yu') {
?>
				<td>-</td>
				<td>
					<?=$signInfo;?>
				</td>
				<td>-</td>
<?php	
		//CAS PARTICULIER DES Wx
		} elseif ($l['reading'] === 'wa') {
?>
			<tr>
				<td>
					<?=$signInfo;?>
				</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
<?php
		//CAS PARTICULIER DE N
		} elseif ($l['v_group'] == 0) {
?>
			<tr>
				<td  colspan="5">
					<?=$signInfo;?>
				</td>
			</tr>
					
<?php
		} elseif ($l['v_group'] == 1) {
?>
			<tr>
				<td>
					<?=$signInfo;?>
				</td>
<?php
		} elseif ($l['v_group'] == 5) {
?>
				<td>
					<?=$signInfo;?>
				</td>
			</tr>
<?php
		} else {
?>
				<td>
					<?=$signInfo;?>
				</td>	
<?php
		}
	}
?>
			</tbody>
		</table>
	</article>
</section>