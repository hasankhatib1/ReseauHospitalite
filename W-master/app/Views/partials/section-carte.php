<section>

	<div class="container">

	<h1>Carte interactive</h1>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7QAkws_akvggu14Ejjuc2MqJR_zpMyLI"></script>

    <!-- récupérer le contenu de la table cartecontacts -->
	<script>
	<?php
		$objContacts = new \Model\CartecontactsModel;
		$lstContacts = $objContacts->findAllBy('afficher','0','id', 'ASC');
		echo 'var data = {"contacts": ';
		echo json_encode($lstContacts);
		echo '}';
	?>
	</script>

    <script type="text/javascript" src="<?= $this->assetUrl('js/js_map/markerclusterer.js')?>"></script>
    <script src="<?= $this->assetUrl('js/js_map/carteinteractive.js')?>"></script>

    <script>
      var lngLongitude = 6.071704;
      var lngLatitude = 43.917851;
      var intZoom = 8;
      google.maps.event.addDomListener(window, 'load', objMap.init);
    </script>

	<div id="map-container">
		<div id="map"></div>
	</div>

	</div>
</section>