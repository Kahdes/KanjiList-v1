<?php $this->title = "Kanji List : sélection de l'exercice"; ?>
<?php $this->description = "Exercez-vous aux différents alphabets et aux kanjis aux travers de QCM !";?>

<section class="row justify-content-center py-3" id="exercises-title">
    <article class="col-12 text-center pb-2">
        <h2 class="display-4">Exercices</h2>
        <hr/>
        <p class="lead m-0">
            Découvrez de <strong>nouveaux kanji</strong> à travers ces exercices et étoffez votre liste personelle.
            <br/>
        </p>
    </article>
</section>

<section class="row justify-content-center pb-3" id="exercises-opt">
    <article class="col-12 col-sm-10 col-md-8 text-center">
        <a href="Exercises/randomKanji" class="btn btn-warning btn-lg w-100 py-3 mb-3">
            <h3 class="m-0">Kanji aléatoire</h3>
        </a>
        <a href="Exercises/randomKanji" class="btn btn-warning btn-lg w-100 py-3 disabled" role="button" aria-disabled="true">
            <h3 class="m-0">Kanji de ma liste</h3>
        </a>        
    </article>
</section>
