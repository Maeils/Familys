<?php
	include "./bdd.php";
	include "./utilitaires.php";
	session_start();
	$_SESSION['pseudo'] = "";
	$_SESSION['mdp'] = "";

	try {
		$dbh = new PDO('mysql:host='.$host.';dbname='.$bdd, $user, $pwd);
		
		$pseudo = securite_bdd($_POST['pseudo']);
		$mdp = securite_bdd($_POST['mdp']);
		
		$query = 'select * from user where pseudo=\''.$pseudo.'\' and motdepasse=\''.$mdp.'\'';
		
		$response = $dbh->query($query);
		$user = $response->fetch();

		if(isset($user) AND $user){
			$_SESSION['pseudo'] = $pseudo;
			$_SESSION['mdp'] = $mdp;
		}

		$response->closeCursor();
		
		$dbh = null;
	} catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
	}
	
	header("location: ../../index.php?page=accueil");
?>
