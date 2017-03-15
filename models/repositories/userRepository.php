<?php

class UserRepository
{

	public function getUser($pdo, $login, $password) {

		$resultat = $pdo->prepare('SELECT id, nom, prenom, login, password FROM user WHERE login = :login AND password = :password');

		$resultat->bindParam(':login', $login, PDO::PARAM_STR);
		$resultat->bindParam(':password', $password, PDO::PARAM_STR);
		$resultat->setFetchMode(PDO::FETCH_OBJ);

		$resultat->execute();
		
		$obj = $resultat->fetch();

		if(empty($obj)) {
			return null;
		} else {
			$user = new User();
			$user->setId($obj->id);
			$user->setNom($obj->nom);
			$user->setPrenom($obj->prenom);
			$user->setLogin($obj->login);
			$user->setPassword($obj->password);

			return $user;
		}

	}

}