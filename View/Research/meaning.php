<?php $this->title = "Kanji List : recherche par signification"; ?>
<?php $this->description = "Cherchez un kanji selon sa signification";?>

<section class="row justify-content-center py-3" id="meaning-title">
    <article class="col-12 text-center pb-2">
        <h2 class="display-4">Recherche par signification</h2>
        <hr/>
        <p class="lead m-0">Renseignez la <strong>signification</strong> du kanji que vous souhaitez trouver</p>
    </article>
</section>

<section class="row justify-content-center py-3" id="meaning-opt">
    <article class="col-12 col-sm-10 text-center">
        <form action="Research/meaning" method="post" class="form" id="meaning-form">
            <label class="sr-only" for="research-m">Signification</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text bg-dark text-white">Signification</div>
                </div>
                <input class="form-control form-control-lg research" type="text" name="research-m" id="research-m" placeholder="Ex : argent" required />
            </div>
            <p class="d-none alert alert-danger research-danger m-0">La recherche contient des caractères interdits</p>
            <button class="form-control form-control-lg btn btn-lg btn-warning sub mt-3" type="submit">Rechercher</button>
        </form>
    </article>
</section>

<?php
	if (isset($list) || isset($result)) {
		require_once('Shared/research_match.php');
	}
?>

<section class="row justify-content-center pt-0 pb-3" id="meaning-return">
    <article class="col-12 text-center">
        <a class="btn btn-link" href="Research/index">Retour à la page de Recherche</a>
    </article>
</section>
