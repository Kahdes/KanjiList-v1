<?php $this->title = "Kanji List : katakana"; ?>
<?php $this->description = "Découvrez facilement les hiragana et les katakana !";?>

<section class="row justify-content-center" id="katakana-title">
	<article class="col-12 col-sm-10 text-center py-3">
		<h2 class="display-4">Katakana</h2>
		<hr/>
		<blockquote class="blockquote text-justify m-0">
			<p>
				Les katakanas sont les éléments d'un des trois ensembles de caractères de l'écriture japonaise avec les kanjis et les <a href="Alphabets/hiragana">hiraganas</a>.
				<br/>
				Les katakanas (片仮名, litt. « kanas fragmentaires ») sont un des deux syllabaires utilisés en japonais. Comme les hiraganas – l'autre syllabaire – les katakanas sont des signes correspondant à des syllabes (ka, ki, ku, ke, ko, etc.). Ils sont utilisés dans le système d'écriture japonais pour transcrire les mots étrangers, les noms propres étrangers, les noms scientifiques des plantes et animaux, et les onomatopées japonaises. Ils peuvent également servir à mettre en valeur dans un texte des mots qui s'écrivent normalement en kanjis ou en hiraganas, ou à écrire un prénom japonais si l'on ne connaît pas le(s) kanji(s) qui le compose(nt).
			</p>
			<footer class="blockquote-footer text-right">Wikipedia <cite><a href="https://fr.wikipedia.org/wiki/Katakana">voir plus</a></cite></footer>
		</blockquote>
	</article>
</section>

<section class="row justify-content-center" id="katakana-table">
	<article class="col-12 col-sm-10 text-center pb-3">
		<table class="table table-striped table-bordered table-hover table-dark m-0">
			<thead class="thead-light">
				<tr>
					<th colspan="5">
						<h3 class="m-0">Table des Katakana</h3>
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
	foreach ($katakana as $k) {
		//CELLULE TYPE
		$signInfo = $k['sign'] . '<br/><strong>' . $k['reading'] . '</strong>';

		//CAS PARTICULIER DES Yx
		if ($k['reading'] === 'yu') {
?>
				<td>-</td>
				<td>
					<?=$signInfo;?>
				</td>
				<td>-</td>
<?php	
		//CAS PARTICULIER DES Wx
		} elseif ($k['reading'] === 'wa') {
?>
			<tr>
				<td>
					<?=$signInfo;?>
				</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
<?php
		//CAS PARTICULIER DE -N
		} elseif ($k['v_group'] == 0) {
?>
			<tr>
				<td  colspan="5">
					<?=$signInfo;?>
				</td>
			</tr>
					
<?php
		} elseif ($k['v_group'] == 1) {
?>
			<tr>
				<td>
					<?=$signInfo;?>
				</td>
<?php
		} elseif ($k['v_group'] == 5) {
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