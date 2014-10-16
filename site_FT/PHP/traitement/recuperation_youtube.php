<?php 

	function recuperation_lien () {
		try {
			include "./bdd.php";

			$dbh = new PDO('mysql:host='.$host.';dbname='.$bdd, $user, $pwd);		
			$query = 'select nom, lien from youtube LIMIT 1 desc';
			
			$response = $dbh->query($query);
			$youtube = $response->fetch();
			return $youtube;
		} catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
		}
	}
?>