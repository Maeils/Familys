<div id="contact" class="article">

	<div class="contact">

		<div class="contenu">

			<div id="box">
				<p>Ici, vous pouvez nous contacter quelle que soit votre demande.</p>
			</div>
			
			<form id="contactMail" method="post" action=<?php /*echo "\"".$chemin_traitement."envoi_mail.php\""*/ ?>"#" enctype="multipart/formdata">
				<fieldset>
					<legend>&Eacute;crivez-nous !</legend>
					
					<div id="contact_gauche">
						<div id="contact_nom" class="champs_contact">Prénom : <input name="prenom" type="text" size="30" maxlength="30" /></div>
				
						<div id="contact_prenom" class="champs_contact">Nom : <input name="nom" type="text" size="30" maxlength="30" /></div>
					</div>
				
					<div id="contact_droite">
						<div id="contact_mail" class="champs_contact">Mail : <input name="mail" type="text" size="30" maxlength="30" /></div>
						
						<div id="contact_sujet" class="champs_contact">Sujet : <input name="sujet" type="text" size="30" maxlength="30" /></div>
					</div>

					<div class="fin_float"></div>
				
					<div id="contact_bas">
						<p>Votre message : </p>
						<textarea name="message" rows="10" cols="60"></textarea><br/>
					
						<input type="submit" value="envoyer" />
						<input type="reset" value="effacer" />
					</div>
				</fieldset>
			</form>

		</div>

	</div>

</div>