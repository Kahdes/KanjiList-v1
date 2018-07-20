<nav class="container-fluid sticky-top bg-dark" id="navbar">
	<div class="row navbar navbar-dark navbar-expand-md">
		<a class="navbar-brand" href="Home/index">漢字</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>

  		<div class="collapse navbar-collapse" id="collapsibleNavbar">
	    	<ul class="navbar-nav mr-auto">
	          	<li class="nav-item" id="Home">
	           		<a class="nav-link" href="Home/index">Accueil</a>
	         	</li>
	         	<li class="nav-item" id="Alphabets">
	            	<a class="nav-link" href="Alphabets/index">Alphabets</a>
	          	</li>
	          	<li class="nav-item" id="Exercises">
	            	<a class="nav-link" href="Exercises/index">Exercices</a>
	          	</li>
	          	<li class="nav-item" id="Research">
	            	<a class="nav-link" href="Research/index">Recherche</a>
	          	</li>
	          	<li class="nav-item" id="Connection">
	            	<a class="nav-link" href="Connection/index">Connexion</a>
	          	</li>    
	    	</ul>
<?php
	if (isset($_SESSION['pseudo'])) {
?>
		<form action="Connection/disconnect" method="post" class="form-inline my-2 my-lg-0">
	      	<button class="btn btn-danger my-2 my-sm-0" type="submit">Déconnexion</button>
	    </form>
<?php
	}
?>
	  	</div> 
	</div>  	 
</nav>