<?php
	include "../traitement/bdd.php";
	session_start();
	$_SESSION['pseudo'] = "";
	$_SESSION['mdp'] = "";

	try {
		$dbh = new PDO('mysql:host='.$host.';dbname='.$bdd, $user, $pwd);
		
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$mail = $_POST['mail'];
		$pseudo = $_POST['pseudo'];
		$mdp = $_POST['mdp'];
		
		$query = 'insert into utilisateur(nom, prenom, mail, pseudo, mdp) values(\''.$nom.'\',\''.$prenom.'\',\''.$mail.'\',\''.$pseudo.'\',\''.$mdp.'\')';
		echo $query;
		
		if($reponse = $dbh->exec($query)){
			$_SESSION['pseudo'] = $pseudo;
			$_SESSION['mdp'] = $mdp;
		}
		
		$dbh = null;
	} catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
	}
	
	header("location: ../../index.php?page=accueil");
?>