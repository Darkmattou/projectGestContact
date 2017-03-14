<?php 
	session_start();
	include_once('library/PDOFactory.php');
	include_once("layouts/layout.php");


	 // $pdo = PDOFactory::getMysqlConnection();

	if (isset($_REQUEST['action'])) {
	$action = $_REQUEST['action'];
	} else {
	$action = null;
	}
?>

	<div class="row">	
		<div class="col-lg-12">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<a href="views/pageVisiteur.php" id="link"><button class="boutonIndex rouge">Candidater</button></a>
			</div>
			<div class="col-lg-4"></div>
		</div>
	</div>
	<div class="row">	
		<div class="col-lg-12">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<a href="views/login.php" id="link"><button class="boutonIndex bleu">Se connecter (en administrateur)</button></a>
			</div>
			<div class="col-lg-4"></div>
		</div>
	</div>
