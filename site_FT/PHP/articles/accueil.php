		<div id="accueil_slideshow">
			<h1>Ici, le slideshow !</h1>
		</div>

		<div id="accueil" class="article">

			<?php

				/*try {
					echo 'mysql:host='.$host.';dbname='.$bdd.' user = '.$user.' pwd = '.$pwd;
					$dbh = new PDO('mysql:host=localhost;dbname=ft_database', 'adminFT', '$adminFAMILYS');
					
					$query = 'select * from user';
					echo $query;

					foreach ($dbh->query($query) as $response) {
						var_dump ($response[0]);
						die();
					}

					$reponse->closeCursor();
					
					$dbh = null;
				} catch (Exception $e) {
					die('Erreur : ' . $e->getMessage());
				}*/

			?>
	
			<div id="accueil_left">
				<div id="accueil_news" class="accueil">
					<div class="contenu">
						<div class="title">
							<img class="logo_titre" src=<?php echo "\"".$chemin_images_design."cercle.png\""?> alt="logo titre"/>
							NEWS
						</div>
						<div id="contenu_news">
							<?php
								try {
									$dbh = new PDO('mysql:host='.$host.';dbname='.$bdd, $user, $pwd);
						
									$query = 'select * from news';

									foreach ($dbh->query($query) as $response) {
										?>
										<div class="news">
											<div class="news_title">
												<?php echo $response['titre']; ?>
											</div>
											<img class="news_image" src=<?php echo "\"".$chemin_images_design."trait_haut_actu.png\""?> alt="image news" />
											<div class="news_redacteur">
												By <?php echo $response['redacteur']; ?>, un connard...
											</div>
											<img class="news_image_bdd" src=<?php echo "\"".$chemin_images_news.$response['image']."\""; ?> alt="image news" />
											<div class="news_synopsis">
											 	<?php echo $response['synopsis']; ?>
											</div>
											<img class="news_image" src=<?php echo "\"".$chemin_images_design."trait_bas.png\""?> alt="image news" />
											<div class="fin_float"></div>
											<a href=<?php echo url_page('zoom_news').'&id_news='.$response['id_news']; ?> class="lien_news_suite">Lire la suite</a>
											<div class="fin_float"></div>
										</div>
										<?php
									}
						
									$dbh = null;
									} catch (Exception $e) {
										die('Erreur : ' . $e->getMessage());
									}
								?>
							</div>
					</div>
				</div>
			</div>

			<div id="accueil_right">
				<div id="accueil_youtube" class="accueil">
					<div class="contenu">
						<div class="title">
							<img class="logo_titre" src=<?php echo "\"".$chemin_images_design."cercle.png\""?> alt="logo titre"/>
							YOUTUBE
						</div>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
					</div>
				</div>

				<div id="accueil_calendrier" class="accueil">
					<div class="contenu">
						<div class="title">
							<img class="logo_titre" src=<?php echo "\"".$chemin_images_design."cercle.png\""?> alt="logo titre"/>
							CALENDRIER
						</div>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
					</div>
				</div>
			</div>

			<div class="fin_float"></div>

		</div>