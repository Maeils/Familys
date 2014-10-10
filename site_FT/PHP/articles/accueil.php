		<div id="accueil" class="article">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec sodales mi. Ut et magna purus. Proin ultrices porta fringilla. Nullam nec neque ac mi faucibus aliquam ut non turpis. Quisque tristique nunc nec leo tempus eget pulvinar massa convallis. Morbi at lacus elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;

Praesent ultrices risus non leo tincidunt euismod vitae ac lorem. Fusce imperdiet, neque nec hendrerit ultricies, odio nibh pulvinar dolor, a consequat dolor tellus eget felis. Curabitur tempor aliquam magna, at ornare justo volutpat non. Curabitur nibh mauris, aliquet a aliquet hendrerit, consectetur nec lorem. Nulla facilisi. Nulla ipsum dui, fermentum ut pellentesque sed, varius ultricies ligula. Praesent rutrum posuere facilisis. Pellentesque arcu arcu, semper sit amet condimentum et, porttitor vel enim. Suspendisse potenti. Curabitur congue metus velit, vitae pharetra lectus. Pellentesque dolor justo, tempor ut consectetur vitae, sollicitudin id mauris. Pellentesque non enim at velit posuere placerat. Nam dapibus eros ac est facilisis eleifend. Praesent ac neque tellus, nec consequat augue. Vivamus quis orci arcu. Vivamus tristique odio et quam luctus in fermentum massa fringilla.

Suspendisse potenti. Proin sed ante in risus cursus imperdiet. Donec vehicula egestas posuere. Vestibulum ornare ligula a velit ultrices et elementum turpis ornare. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla facilisi. Quisque metus est, vehicula nec dignissim ut, bibendum id nisl. Nam lobortis arcu eu mi tincidunt ut tincidunt arcu feugiat. Mauris non tellus ut tortor mattis ullamcorper nec imperdiet urna. Praesent tempor faucibus lectus sed auctor. Integer quis purus sed libero feugiat adipiscing. Cras sit amet est mi, vitae vestibulum risus.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed laoreet arcu. Proin orci erat, rhoncus ut eleifend in, facilisis vitae quam. Donec purus nisi, congue ut volutpat et, pellentesque a odio. In pulvinar lectus at odio iaculis gravida. Donec fermentum augue vel erat tempor vitae dictum mauris vulputate. Sed sodales tempor quam, quis accumsan est dapibus sit amet. In vitae ornare nisl. Pellentesque laoreet arcu at eros egestas id elementum enim luctus. Curabitur laoreet, massa eu pulvinar dapibus, ante massa commodo risus, vitae ultricies dolor mi a sapien. Cras pellentesque posuere erat, ac porttitor diam vestibulum ut. Duis volutpat facilisis nulla, vel malesuada ligula feugiat eu. Nunc ut feugiat dui. Donec suscipit adipiscing blandit. Curabitur ac magna a dui convallis auctor eget a nisi.

Pellentesque nec urna id massa dictum mollis. Aliquam pharetra lorem nec leo tristique eleifend sed vitae enim. Nunc sollicitudin lacinia lectus bibendum dapibus. Nullam at dui mauris, ac ullamcorper erat. Fusce vestibulum orci et ligula bibendum eleifend lobortis odio tempus. Donec luctus consectetur ante id viverra. Phasellus urna magna, ullamcorper non dictum ac, commodo in sem. Morbi nec consectetur nisi.
			</p>

			<?php

				try {
					echo 'mysql:host='.$host.';dbname='.$bdd.' user = '.$user.' pwd = '.$pwd;
					$dbh = new PDO('mysql:host=localhost;dbname=altitude', 'root', '');
					
					$query = 'select * from Utilisateur';
					echo $query;
					
					$reponse = $dbh->query($query);

					alert($reponse[1]['nom']);

					$reponse->closeCursor();
					
					$dbh = null;
				} catch (Exception $e) {
					die('Erreur : ' . $e->getMessage());
				}

			?>

		</div>