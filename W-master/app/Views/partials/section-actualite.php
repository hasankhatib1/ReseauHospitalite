<section>
	<div class="container box">

<?php
	if (isset($id)) {

		$objactualite = new \Model\ActualitesModel;
		$actualite = $objactualite->find($id);
		if (!empty($actualite)) {
			extract($actualite);

			echo '<h2>'.$titre.'</h2>';
			echo '<p>'.$libelle.'</p>';
			echo '<p>'.$date.'</p>';
			echo '<p>'.$description.'</p>';
			echo '<img
					class="img-responsive"
					src="' . $this->assetUrl('img/actualites/' . $photo) . '"
					alt="">';
		}
	}
?>

	</div>
</section>