<?php
	
	include('./Modele/Connexion.php');

	function getListPhotos(){
		global $bdd;
		
		$req = $bdd->prepare("SELECT * FROM photos");
		$req->setFetchMode(PDO::FETCH_ASSOC);
		$req->execute();
		
		return $req->fetchAll();
	}
	
	function getListMembres(){
		global $bdd;
		
		$req = $bdd->prepare("SELECT * FROM membres LEFT JOIN roles ON roles.idRole = membres.idRole");
		$req->setFetchMode(PDO::FETCH_ASSOC);
		$req->execute();
		
		return $req->fetchAll();
	}
	
	function getListEvenements(){
		global $bdd;
		
		$req = $bdd->prepare("SELECT * FROM evenements");
		$req->setFetchMode(PDO::FETCH_ASSOC);
		$req->execute();
		
		return $req->fetchAll();
	}
	
	function addContactData($data){
		global $bdd;
		
		$req = $bdd->prepare("INSERT INTO contacts(nomContact, emailContact, phoneContact, typeContact, content, fileUrl) VALUES(?, ?, ?, ?, ?, ?);");
		$req->execute($data);
	}