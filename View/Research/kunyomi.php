<?php $this->title = "Kanji List : recherche par Kun'yomi"; ?>
<?php $this->description = "Cherchez un kanji selon sa lecture japonaise : Kun'yomi";?>

<section class="row justify-content-center py-3" id="kunyomi-title">
    <article class="col-12 text-center pb-2">
        <h2 class="display-4">Recherche par Kun'yomi</h2>
        <hr/>
        <p class="lead m-0">Renseignez la <strong>lecture japonaise</strong> (<em>kun'yomi</em>) du kanji que vous souhaitez trouver</p>
    </article>
</section>

<section class="row justify-content-center py-3" id="kunyomi-opt">
    <article class="col-12 col-sm-10 text-center">
        <form action="Research/kunyomi" method="post" class="form" id="kunyomi-form">
            <label class="sr-only" for="research-ku">Kun'yomi</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text bg-dark text-white">Kun'yomi</div>
                </div>
                <input class="form-control form-control-lg research" type="text" name="research-ku" id="research-ku" placeholder="Ex : kane" required />
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

<section class="row justify-content-center pt-0 pb-3" id="kunyomi-return">
    <article class="col-12 text-center">
        <a class="btn btn-link" href="Research/index">Retour à la page de Recherche</a>
    </article>
</section>
