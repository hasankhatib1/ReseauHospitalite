		<form action="" method="post" class="form-horizontal">

			<div class="form-group">
				<label for="nom" class="control-label col-sm-2">Nom</label>
				<div class="col-sm-10">
					<input type="text" name="nom" id="nom" class="form-control" maxlength="50" required value="<?= $nom ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="description" class="control-label col-sm-2">Description</label>
				<div class="col-sm-10">
					<textarea name="description" id="description" cols="60" rows="3" class="form-control" maxlength="255" required><?= $description ?></textarea>
				</div>
			</div>

			<div class="form-group">
				<label for="adresse" class="control-label col-sm-2">Adresse</label>
				<div class="col-sm-10">
					<input type="text" name="adresse" id="adresse" class="form-control" maxlength="100" required value="<?= $adresse ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="codepostal" class="control-label col-sm-2">Code postal</label>
				<div class="col-sm-2">
					<input type="text" name="codepostal" id="codepostal" class="form-control" maxlength="5" required value="<?= $codepostal ?>">
				</div>
				<label for="ville" class="control-label col-sm-2">Ville</label>
				<div class="col-sm-6">
					<input type="text" name="ville" id="ville" class="form-control" maxlength="50" required value="<?= $ville ?>">
				</div>
			</div>

<!-- 			<div class="form-group">
				<div class="col-sm-2 col-sm-offset-2">
					<button type="button" class="btn btn-default">Rechercher coordonnées</button>
				</div>
				<label for="longitude" class="control-label col-sm-1">Longitude</label>
				<div class="col-sm-3">
					<input type="number" name="longitude" id="longitude" class="form-control" required value="<?= $longitude ?>">
				</div>
				<label for="latitude" class="control-label col-sm-1">Latitude</label>
				<div class="col-sm-3">
					<input type="number" name="latitude" id="latitude" class="form-control" required value="<?= $latitude ?>">
				</div>
			</div> -->

			<div class="form-group">
				<label for="url" class="control-label col-sm-2">Site Internet</label>
				<div class="col-sm-10">
					<input type="url" name="url" id="adresse" class="form-control" maxlength="100" value="<?= $url ?>">
				</div>
			</div>


			<div class="form-group">
				<label for="url" class="control-label col-sm-2">Visible</label>
				<div class="col-sm-10">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="afficher" id="afficher" value="<?= $afficher ?>" <?= $cac ?> >
						</label>
					</div>
				</div>
			</div>

			<input type="hidden" name="id" value="$id">
			<input type="hidden" name="operation" value="<?= $operation ?>">

			<div class="form-group text-center">
				<div class="message"></div>
				<button type="submit" class="btn btn-default">Enregistrer</button>
				<button class="btn btn-default"><a href="<?= $this->url('carte_interactive_liste')?>">Fermer</a></button>
			</div>
		</form>


<script>
	document.getElementById('nom').focus();
</script>