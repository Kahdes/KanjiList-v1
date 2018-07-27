<?php $this->title = "Kanji List : accueil"; ?>
<?php $this->description = "Découvrez nos solutions pour vous aider à apprendre le japonais !";?>

<?php require_once('slider.php');?>

<section class="row justify-content-center bg-dark pt-3 pb-4" id="home-title">
    <article class="col-12 text-white text-center pb-2">
        <h2 class="display-4">Les alphabets japonais</h2>
        <hr/>
        <p class="lead">Apprenez-en plus sur les différents <strong>alphabets japonais</strong> en consultant nos tableaux récapitulatifs !</p>
    </article>

    <article class="col-12 col-md-5 mb-4 mb-md-0">
        <a href="Alphabets/hiragana" class="btn btn-warning btn-lg w-100 py-3" title="Vers la section Hiragana">
            <h3 class="m-0">Hiragana</h3>
        </a>
    </article>
    <article class="col-12 col-md-5 mb-4 mb-md-0">
        <a href="Alphabets/katakana" class="btn btn-warning btn-lg w-100 py-3" title="Vers la section Katakana">
            <h3 class="m-0">Katakana</h3>
        </a>
    </article>
</section>

<section class="row justify-content-center py-3" id="home-kanji">
    <article class="col-12 text-center pb-2">
        <h2 class="display-4">6 Kanji aléatoires : </h2>
        <hr/>
        <p class="lead">Cliquez sur un kanji afin de voir plus d'informations le concernant !</p>
    </article>

    <article class="col-12 card-columns" id="home-kanji-columns">
<?php
	foreach ($random as $r) {
?>
        <a class="card bg-dark text-center text-white kanji-card" href="Research/result/<?=$r['id'];?>" title="Vers <?=$r['kanji'];?>">
            <div class="card-header">
                <h3 class="card-title display-4 m-0"><?=$r['kanji'];?></h3>
            </div>
        </a>
<?php
	}
?>
    </article>
</section>
