<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<!-- bootstrap css -->
	<link href="web/css/bootstrap.min.css" rel="stylesheet">

	<!-- custom css -->
	<link rel="stylesheet" href="web/css/style.css">

	<!-- fonts -->
	<link href="web/css/font-awesome.min.css" rel="stylesheet"">
	
	<title>Institut IMIE Le Mans</title>
</head>
<body>
	<div class="container">

		<header>

			<div class="row">
				<div class="col-lg-10">
					<img class="logo" src="web/img/logo-imie_1.png">
				</div>
				<div class="col-lg-2 telHeader">
					<span><i class="fa fa-phone fa-custom" aria-hidden="true"></i>02 28 01 37 54</span>		
				</div>			
			</div>
			<div class="row">
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

		</header>

		<div class="content">

		<?php include($vueAAfficher); ?> <!-- Dépend de comment on appelle la variable qui affiche les vues -->

		</div>


		<footer>
			<div class="row">
				
			</div>
		</footer>

	</div>
		
</body>
</html>