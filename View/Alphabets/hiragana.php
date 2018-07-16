<?php $this->title = "Kanji List : hiragana"; ?>
<?php $this->description = "Découvrez facilement les hiragana et les katakana !";?>

<section class="row justify-content-center" id="hiragana-title">
	<article class="col-12 col-sm-10 text-center py-3">
		<h2 class="display-4">Hiragana</h2>
		<hr/>
		<blockquote class="blockquote text-justify m-0">
			<p>
				Les hiraganas (平仮名, ひらがな, littéralement « kanas lisses ») sont un syllabaire japonais et une des quatre écritures du japonais avec les <a href="Alphabets/katakana">katakanas</a>, les rōmajis et les kanjis.
				<br/>
				Ils ont été formés par abréviation cursive de kanjis homophones. Ils permettent de transcrire la langue japonaise sans ambigüité, au contraire des kanjis. En effet, chaque hiragana représente une syllabe (techniquement, une more) qui peut être une voyelle seule (comme あ = a) ou une consonne suivie d'une voyelle (comme か = ka) ; il y a également le n syllabique (ん), dont la prononciation varie en fonction de la syllabe qui le suit.
			</p>
			<footer class="blockquote-footer text-right">Wikipedia <cite><a href="https://fr.wikipedia.org/wiki/Hiragana">voir plus</a></cite></footer>
		</blockquote>
	</article>
</section>

<section class="row justify-content-center" id="hiragana-table">
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
	foreach ($hiragana as $h) {
		//CELLULE TYPE
		$signInfo = $h['sign'] . '<br/><strong>' . $h['reading'] . '</strong>';

		//CAS PARTICULIER DES Yx
		if ($h['reading'] === 'yu') {
?>
				<td>-</td>
				<td>
					<?=$signInfo;?>
				</td>
				<td>-</td>
<?php	
		//CAS PARTICULIER DES Wx
		} elseif ($h['reading'] === 'wa') {
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
		} elseif ($h['v_group'] == 0) {
?>
			<tr>
				<td  colspan="5">
					<?=$signInfo;?>
				</td>
			</tr>
					
<?php
		} elseif ($h['v_group'] == 1) {
?>
			<tr>
				<td>
					<?=$signInfo;?>
				</td>
<?php
		} elseif ($h['v_group'] == 5) {
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