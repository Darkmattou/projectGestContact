<?php
session_start();
include_once('../library/PDOFactory.php');
<<<<<<< HEAD
include_once('../models/entities/User.php');
include_once('../models/repositories/userRepository.php');
include_once('../models/repositories/ClientRepository.php');
include_once('../models/entities/personne.php');
=======
include_once('../models/entities/personne.php');
include_once('../models/entities/User.php');
include_once('../models/repositories/clientRepository.php');
include_once('../models/repositories/userRepository.php');
>>>>>>> 424e9c4057f089234f8a1a699a419e8f193192ac


$pdo = PDOFactory::getMysqlConnection();

	if (isset($_REQUEST['action'])) {
		$action = $_REQUEST['action'];
	} else {
		$action = null;
	}


switch ($action) {

	case "verifLogin":
		$userRepo = new UserRepository();
		$user = $userRepo->getUser($pdo, $_POST['login'], $_POST['mdp']);
		
		if($user) {
			$_SESSION['login'] = $user->getLogin();
			include("views/dashboard.php");
		} else {
			include("views/login.php");
		}
		break;

	case "disconnect":
		$_SESSION = array();
		session_destroy();
		include("views/login.php");
		break;

	default:
		if(empty($_SESSION['login'])) {
			include("views/login.php");
		} else {
			include("views/dashboard.php");
			break;
		}
}
?>