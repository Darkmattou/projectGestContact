<?php 
	session_start();
	include_once('library/PDOFactory.php');
	include_once("layouts/layout.php");
?>

<?php
	 // $pdo = PDOFactory::getMysqlConnection();

	if (isset($_REQUEST['action'])) {
	$action = $_REQUEST['action'];
	} else {
	$action = null;
	}
?>
