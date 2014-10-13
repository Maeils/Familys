<?php
	include "../traitement/bdd.php";
	include "../traitement/utilitaires.php";
	session_start();
	$_SESSION['pseudo'] = "";
	$_SESSION['mdp'] = "";

	try {
		$dbh = new PDO('mysql:host='.$host.';dbname='.$bdd, $user, $pwd);
		
		$nom = securite_bdd($_POST['nom']);
		$prenom = securite_bdd($_POST['prenom']);
		$mail = securite_bdd($_POST['mail']);
		$pseudo = securite_bdd($_POST['pseudo']);
		$mdp = securite_bdd($_POST['mdp']);
		
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
