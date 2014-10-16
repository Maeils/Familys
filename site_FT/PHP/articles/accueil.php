		<div id="wrapper">

			<div class="slider-wrapper theme-dark">

				<div id="slider" class="nivoSlider">
					<!--  Images to slide through.  -->
			        <img src=<?php echo "\"".$chemin_images_slider."slide1.jpg\""?> data-thumb=<?php echo "\"".$chemin_images_slider."slide1.jpg\""?> alt="slider 1" title="League of Legend, classé meilleur moyen de contraception en Corée du sud !"/>
			        <img src=<?php echo "\"".$chemin_images_slider."slide2.jpg\""?> data-thumb=<?php echo "\"".$chemin_images_slider."slide2.jpg\""?> alt="slider 2" title="Témoignage de l'ex-mari de Ahri : Je n'en pouvais plus des boules de poils régurgitées la nuit..."/>
			        <img src=<?php echo "\"".$chemin_images_slider."slide3.jpg\""?> data-thumb=<?php echo "\"".$chemin_images_slider."slide3.jpg\""?> alt="slider 3" title="Une sorcière passée au bûché dans la ville estivale de Compiègne... Comme on dit, pas de fumée sans feu..."/>
			        <img src=<?php echo "\"".$chemin_images_slider."slide4.jpg\""?> data-thumb=<?php echo "\"".$chemin_images_slider."slide4.jpg\""?> alt="slider 4" title="Potin du jour : Zyra aurait été approchée pour jouer Poison Ivy dans le prochain Batman. Une bonne idée ?"/>
				</div>
			</div>
		</div>

		<!--  Load the javascript files  -->
	    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	    <script type="text/javascript" src="JS/nivo-slider/jquery.nivo.slider.js"></script>
	    <script type="text/javascript">
	    
	    //<!--  Load the slider  --> 
	    $(window).load(function() {
	        $('#slider').nivoSlider();
	    });
	    
	    </script>

		<div id="accueil" class="article">
	
			<div id="accueil_left">
				<div id="accueil_news" class="accueil">
					<div class="contenu">
						<div class="title">
							<img class="logo_titre" src=<?php echo "\"".$chemin_images_design."cercle.png\""?> alt="logo titre"/>
							<a href=<?php echo url_page('jeuxft'); ?> class="lien_titre">
								NEWS
							</a>
						</div>
						<div id="contenu_news">
							<?php
								try {
									$dbh = new PDO('mysql:host='.$host.';dbname='.$bdd, $user, $pwd);

									$dbh->query("SET NAMES UTF8"); 
						
									$query = 'select * from news';

									$statement = $dbh->query($query);

									for ($i = 0; $i < 3 AND $response = $statement->fetch(); $i++) {
										?>
										<div class="news">
											<div class="news_title">
												<?php echo $response['titre']; ?>
											</div>
											<img class="news_image" src=<?php echo "\"".$chemin_images_design."trait_haut_actu.png\""?> alt="image news" />
											<div class="news_redacteur">

												<?php
													$query2 = 'select pseudo from user where id_user='.$response['redacteur'];
													
													$response2 = $dbh->query($query2);
													$pseudo = $response2->fetch();
												?>

												By <?php echo $pseudo[0]; ?>, un connard...
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