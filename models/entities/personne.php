<?php

abstract class Personne 
{
	protected $id;
	protected $Nom;
	protected $prenom;
	protected $dateNaissance;
	protected $tel;
	protected $cp;
	protected $ville;
	protected $email;
	protected $etabOrigine;
	protected $diplomeObtenu;
	protected $dispo;

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getNom() {
		return $this->Nom;
	}

	public function setNom($Nom) {
		$this->Nom = $Nom;
	}

	public function getPrenom() {
		return $this->prenom;
	}

	public function setPrenom($prenom) {
		$this->prenom = $prenom;
	}

	public function getDateNaissance() {
		return $this->dateNaissance;
	}

	public function setDateNaissance($dateNaissance) {
		$this->dateNaissance = $dateNaissance;
	}

	public function getCp() {
		return $this->cp;
	}

	public function setCp($cp) {
		$this->cp = $cp;
	}

	public function getVille() {
		return $this->ville;
	}

	public function setVille($ville) {
		$this->ville = $ville;
	}

	public function getTel() {
		return $this->tel;
	}

	public function setTel($tel) {
		$this->tel = $tel;
	}

	public function getEtabOrigine() {
		return $this->etabOrigine;
	}

	public function setEtabOrigine($etabOrigine) {
		$this->etabOrigine = $etabOrigine;
	}

	public function getDiplomeObtenu() {
		return $this->etabOrigine;
	}

	public function setDiplomeObtenu($diplomeObtenu) {
		$this->diplomeObtenu = $diplomeObtenu;
	}

	public function getDispo() {
		return $this->etabOrigine;
	}

	public function setDispo($dispo) {
		$this->dispo = $dispo;
	}
}

?>