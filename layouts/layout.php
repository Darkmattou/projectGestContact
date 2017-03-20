<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<!-- bootstrap css -->
	<link href="../web/css/bootstrap.min.css" rel="stylesheet">

	<!-- custom css -->
	<link rel="stylesheet" href="../web/css/style.css">

	<!-- fonts -->
	<link href="../web/css/font-awesome.min.css" rel="stylesheet"">

	<!-- JQuery -->
	<script src="../web/js/jquery-3.1.1.min.js"></script>

	<title>Institut IMIE Le Mans</title>
</head>
<body>
	<div class="container">

		<header>

			<div class="row">
				<div class="col-lg-10">
					<img class="logo" src="../web/img/logo-imie_1.png">
				</div>
				<div class="col-lg-2 telHeader">
					<span><i class="fa fa-phone fa-custom" aria-hidden="true"></i>02 28 01 37 54</span>		
				</div>			
			</div>
			<div class="row">
				<div class="col-lg-12">	
					<ul class="menuVille">
						<li class="color00b6de"><span>Nantes</span></li>
						<li class="colorfdb515"><span>Angers</span></li>
						<li class="colored3126"><span>Rennes</span></li>
						<li class="coloref7a35"><span>Laval</span></li>
						<li class="color58bf94"><span>Le Mans</span></li>
						<li class="color00b6de"><span>Caen</span></li>
						<li class="colorfdb515"><span>Paris</span></li>
					</ul>	
				</div>																		
			</div>	

		</header>
					<!-- la vue à afficher dépend de comment on appelle la variable qui affiche les 
					vues qui sera géré plus tard dans le controleur index.php -->
		<div class="content">
<<<<<<< HEAD
		 <?php 
		 $vueAAfficher="../views/pageVisiteur.php";  /* pour l'instant on défini la vue à afficher directement ici le temps du code de la vue visiteur */
=======
			<div class="row">	
				<div class="col-lg-12 ">
					<a href="views/pageVisiteur.php"><button class="boutonIndex rouge">Candidater</button></a>
				</div>
			</div>
		 <?php 
		 $vueAAfficher="../index.php";  /* pour l'instant on défini la vue à afficher directement ici le temps du code de la vue visiteur */
>>>>>>> 424e9c4057f089234f8a1a699a419e8f193192ac
		 include($vueAAfficher); 	
		 ?> 										

		</div>


		<footer>
		<img alt="" class="img-accroche" longdesc="http://imie-ecole-informatique.fr/www.imie-ecole-informatique.fr/dates-de-rentrees.html" src="http://imie-ecole-informatique.fr/sites/default/files/imce/accroches/dates_de_rentrees.png" style="height: 260px; width: 380px;">
			
			<img alt="Les ecoles d'informatique sont share ?" class="img-accroche" src="http://imie-ecole-informatique.fr/sites/default/files/imce/accroches/accroche-ecole-share.jpg" style="width: 380px; height: 260px;">
				
			<div class ="row">
				<div class="footer2">
					<a href="http://imie-ecole-informatique.fr/mentions-legales.html">Mentions légales</a>
					|
					<a href="http://imie-ecole-informatique.fr/campus/nantes.html">Contact</a>
					|
					<a href="http://imie-ecole-informatique.fr/sitemap">Plan du site</a>
					|
					<a href="https://www.ymagonline.net/IMIE44">Accès étudiant</a>
					|
				</div>
			</div>
			
			


		</footer>

	</div>

	<script src="../web/js/scriptVisiteur.js"></script>
	<script src="../web/js/scriptIndex.js"></script>
</body>
</html>