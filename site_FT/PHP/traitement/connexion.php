<?php
	include "../traitement/bdd.php";
	session_start();
	$_SESSION['pseudo'] = "";
	$_SESSION['mdp'] = "";

	try {
		$dbh = new PDO('mysql:host='.$host.';dbname='.$bdd, $user, $pwd);
		
		$pseudo = $_POST['pseudo'];
		$mdp = $_POST['mdp'];
		
		$query = 'select * from Utilisateur where pseudo=\''.$pseudo.'\' and mdp=\''.$mdp.'\'';
		echo $query;
		
		$reponse = $dbh->query($query);
		
		if($ligne = $reponse->fetch()){
			$_SESSION['pseudo'] = $pseudo;
			$_SESSION['mdp'] = $mdp;
		}

		$reponse->closeCursor();
		
		$dbh = null;
	} catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
	}
	
	header("location: ../../index.php?page=accueil");
?>