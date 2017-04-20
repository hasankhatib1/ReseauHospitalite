<section>

	<div class="container box">

		<div class="text-center">
			<h1 class="titrsPage">Carte interactive</h1>
			<?php 
	        if (isset($w_user['role'])) 
	        { 
				echo '<a class="btn btn-success" href="'. $this->url('carte_interactive_liste'). '">Modifier</a> ' ;
	
			}
			?>

		</div><br>

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7QAkws_akvggu14Ejjuc2MqJR_zpMyLI"></script>

		<!-- récupérer le contenu de la table carteinteractive -->
		<script>
		<?php
			$objpointscarte = new \Model\CarteinteractiveModel;
			$lstPointscarte = $objpointscarte->findAllBy('afficher','0','id', 'ASC');
			echo 'var data = {"contacts": ';
			echo json_encode($lstPointscarte);
			echo '}';
		?>
		</script>

		<script type="text/javascript" src="<?= $this->assetUrl('js/js_map/markerclusterer.js')?>"></script>

		<script src="<?= $this->assetUrl('js/js_map/carteinteractive.js')?>"></script>

		<script>
			<?php
				$app = getApp();
				echo 'var lngLongitude = '.$app->getConfig('carte_interactive_longitude') . "\n";
				echo 'var lngLatitude = '.$app->getConfig('carte_interactive_latitude') . "\n";
				echo 'var intZoom = '.$app->getConfig('carte_interactive_zoom') . "\n";
			?>
			// var lngLongitude = 6.071704;
			// var lngLatitude = 43.917851;
			// var intZoom = 8;
			google.maps.event.addDomListener(window, 'load', objMap.init);
		</script>

		<div id="map-container">
			<div id="map"></div>
		</div>
	</div>
</section>