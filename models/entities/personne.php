<?php

<<<<<<< HEAD
class Personne 
=======
abstract class Personne 
>>>>>>> 424e9c4057f089234f8a1a699a419e8f193192ac
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
<<<<<<< HEAD
	protected $dateForm;
	protected $sourceInfo;
	protected $nomSite;
	protected $nomStatut;
	protected $nomFormation;
=======
>>>>>>> 424e9c4057f089234f8a1a699a419e8f193192ac

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
<<<<<<< HEAD
		return $this->diplomeObtenu;
=======
		return $this->etabOrigine;
>>>>>>> 424e9c4057f089234f8a1a699a419e8f193192ac
	}

	public function setDiplomeObtenu($diplomeObtenu) {
		$this->diplomeObtenu = $diplomeObtenu;
	}

	public function getDispo() {
<<<<<<< HEAD
		return $this->dispo;
=======
		return $this->etabOrigine;
>>>>>>> 424e9c4057f089234f8a1a699a419e8f193192ac
	}

	public function setDispo($dispo) {
		$this->dispo = $dispo;
	}
<<<<<<< HEAD
	public function getDateForm() {
		return $this->dateForm;
	}

	public function setDateForm($dateForm) {
		$this->dateForm = $dateForm;
	}
	public function getSourceInfo() {
		return $this->sourceInfo;
	}

	public function setSourceInfo($sourceInfo) {
	
		$this->sourceInfo = $sourceInfo;
	}
	public function getNomSite() {
		return $this->nomSite;
	}

	public function setNomSite($nomSite) {
		$this->nomSite = $nomSite;
	}
	public function getNomStatut() {
		return $this->nomStatut;
	}

	public function setNomStatut($nomStatut) {
		$this->nomStatut = $nomStatut;
	}
	public function getNomFormation() {
		return $this->nomFormation;
	}

	public function setNomFormation($nomFormation) {
		$this->nomFormation = $nomFormation;
	}
=======
>>>>>>> 424e9c4057f089234f8a1a699a419e8f193192ac
}

?>