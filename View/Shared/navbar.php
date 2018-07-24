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
	          	<li class="nav-item" id="Research">
	            	<a class="nav-link" href="Research/index">Recherche</a>
	          	</li>
<?php
	if (isset($_SESSION['pseudo'])) {
?>
				<li class="nav-item" id="Exercises">
	            	<a class="nav-link" href="Exercises/index">Exercices</a>
	          	</li>
				<li class="nav-item" id="Panel">
	            	<a class="nav-link" href="Panel/index">Tableau de bord</a>
	          	</li>
<?php
	} else {
?>
				<li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          	Compte
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			            <a class="dropdown-item" href="Connection/index">Connexion</a>
	            		<a class="dropdown-item" href="Connection/inscription">Inscription</a>
	            	</div>
			    </li>
<?php
	}
?>	          	    
	    	</ul>
<?php
	if (isset($_SESSION['pseudo'])) {
?>
		<form action="Connection/disconnect" method="post" class="form-inline my-0">
	      	<button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Déconnexion</button>
	    </form>
<?php
	}
?>
	  	</div> 
	</div>  	 
</nav>