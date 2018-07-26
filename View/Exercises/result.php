<?php $this->title = "Kanji List : sélection de l'exercice"; ?>
<?php $this->description = "Exercez-vous aux différents alphabets et aux kanjis aux travers de QCM !";?>

<section class="row justify-content-center py-3" id="exercises-title">
    <article class="col-12 col-sm-10 col-md-8 text-center">
<?php 
    if ($result === 1) {
?>
        <h2 class="display-4">Bravo !</h2>
        <hr/>
        <div class="alert alert-success">
            <p class="lead m-0">
                Félicitations ! Vous avez trouvé la <strong>bonne réponse</strong> !
            </p>
        </div>        
<?php
    } else {
?>
        <h2 class="display-4">Dommage !</h2>
        <hr/>
        <div class="alert alert-danger">
            <p class="lead m-0">
                Vous avez choisi la <strong>mauvaise réponse</strong>. Redécouvrez le kanji <?=$kanji;?> ou essayez de trouver un nouveau kanji aléatoirement !
            </p>
        </div>        
<?php      
    }
?>        
    </article>
</section>

<section class="row justify-content-center pb-3" id="exercises-opt">
    <article class="col-12 col-sm-10 col-md-8">
<?php
    if (!$list && $result === 1) {
?>
        <a href="Panel/addItem/<?=$id;?>" class="text-center text-dark">
            <div class="card bg-warning py-3 mb-3">
                <h3 class="m-0">Ajouter <?=$kanji;?> à ma liste</h3>
            </div>
        </a>
<?php
    }
?>    
        <a href="Research/result/<?=$id;?>" class="text-center text-dark">
            <div class="card bg-warning py-3 mb-3">
                <h3 class="m-0">Plus d'infos sur <?=$kanji;?></h3>
            </div>
        </a>
        <a href="Exercises/randomKanji" class="text-center text-dark">
            <div class="card bg-warning py-3 mb-3">
                <h3 class="m-0">Kanji aléatoire</h3>
            </div>
        </a>
    </article>
</section>
