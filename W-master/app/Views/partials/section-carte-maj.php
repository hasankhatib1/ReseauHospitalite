<section>
	<div class="container">

<?php
	$objpointscarte = new \Model\CarteinteractiveModel;
	$pointcarte = $objpointscarte->find($id);
	if (!empty($pointcarte)) {
		extract($pointcarte);
		$message2 = "";
		if (isset($message)) $message2 = $message;
		if ($afficher==0) $cac = 'checked';
		else $cac = '';
		echo
<<<CODEHTML
		<h2>Mise à jour de "$nom"</h2>
		<form method="POST" role="form">
			<div class="messages"></div>
			<div class="controls">
				<div class="row">
					<div class="form-group">
						<input type="text" name="nom" placeholder="Nom" value="$nom" required>
					</div>
				</div>

				<textarea name="description" placeholder="Description" cols="60" rows="3" required>$description</textarea><br>

				<input type="text" name="categorie" placeholder="Categorie" value="$categorie"><br>

				<input type="text" name="adresse" placeholder="Adresse" value="$adresse" required><br>

				<input type="text" name="codepostal" placeholder="Code postal" value="$codepostal" required><br>
				<input type="text" name="ville" placeholder="Ville" value="$ville" required><br>
				<button class="btn btn-success">Rechercher coordonnées</button>

				<input type="text" name="longitude" placeholder="Longitude" value="$longitude" required><br>
				<input type="text" name="latitude" placeholder="Latitude" value="$latitude" required><br>

				<input type="text" name="url" placeholder="Adresse Internet" value="$url"><br>
				<input type="checkbox" name="afficher" value="$afficher" $cac>Visible<br>

				<input type="hidden" name="id" value="$id">
				<input type="hidden" name="operation" value="modifier">
				<div class="message">
					$message2
				</div>
				<button type="submit" class="btn btn-success">Enregistrer</button>
				<button class="btn btn-success">Fermer</button>
			</div>
		</form>
CODEHTML;
	}
	else {
		echo '<h2>Aucun point trouvé</h2>';
	}
?>
	</div>
</section>