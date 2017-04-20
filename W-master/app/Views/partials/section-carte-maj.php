<section>
	<div class="container box">

<?php
	$continuer = false;
	if (isset($id)) {
		if ($id > -1) {
			$objpointscarte = new \Model\CarteinteractiveModel;
			$pointcarte = $objpointscarte->find($id);
			if (!empty($pointcarte)) {
				extract($pointcarte);
				$message2 = "";
				if (isset($message)) $message2 = $message;
				echo '<h2 class="text-center">Mise à jour de "'.$nom.'"</h2>';
				$continuer = true;
				$operation = 'modifier';
			}
			else {
				echo '<h2>Ce point n\'existe pas</h2>';
			}
		}
		else {
			echo '<h2 class="text-center">Nouveau point</h2>';
			$nom = '';
			$description = '';
			$adresse = '';
			$codepostal = '';
			$ville = '';
			$longitude = 0;
			$latitude = 0;
			$url='';
			$afficher = 0;
			$continuer = true;
			$operation = 'creer';
		}
	}
	if ($continuer) {
		if ($afficher==0) $cac = 'checked';
		else $cac = '';
		include "section-carte-maj-frm.php";
	}

?>
	</div>
</section>