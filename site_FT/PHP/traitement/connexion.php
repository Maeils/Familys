<?php
	include "./bdd.php";
	include "./traitement/utilitaires.php";
	session_start();
	$_SESSION['pseudo'] = "";
	$_SESSION['mdp'] = "";

	try {
		$dbh = new PDO('mysql:host='.$host.';dbname='.$bdd, $user, $pwd);
		
		$pseudo = securite_bdd($_POST['pseudo']);
		$mdp = securite_bdd($_POST['mdp']);
		
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
