<?php

namespace Controller;

use \W\Controller\Controller;

class CarteController extends Controller
{

	private $nom;
	private $description;
	private $categorie;
	private $adresse;
	private $codepostal;
	private $ville;
	private $longitude;
	private $latitude;
	private $url;
	private $afficher;

	private function verifSaisie ($contact) {

		$this->nom = $contact['nom'];
		$this->description = $contact['description'];
		$this->categorie = 1;
		$this->adresse = $contact['adresse'];
		$this->codepostal = $contact['codepostal'];
		$this->ville = $contact['ville'];
		$this->geolocalisation();
		$this->url = $contact['url'];
		$this->afficher = $contact['afficher'];

		return true;
	}

	// le framworke w va extraire de l'url l'info qui correspond à [:id] (voir route.php)
	// et va le passer en prm de la méthode
	public function carteMaj ($id) {
		$message = "";

		if (!empty($_REQUEST)) {
			$safe = array_map('strip_tags', $_REQUEST);
			if (isset($safe['operation'])) {
				if ($this->verifSaisie($safe)) {
					$objpointscarte = new \Model\CarteinteractiveModel;
					$data = ["nom" => $this->nom,
							 "description" => $this->description,
							 "categorie" => $this->categorie,
							 "adresse" => $this->adresse,
							 "codepostal" => $this->codepostal,
							 "ville" => $this->ville,
							 "longitude" => $this->longitude,
							 "latitude" => $this->latitude,
							 "url" => $this->url,
							 "afficher" => $this->afficher,
							];
					switch ($safe['operation']) {
						case 'modifier':
							$objpointscarte->update($data, $id, true);
							$message = "Le point a été enregistré";
							break;
						case 'creer':
							$objpointscarte->insert($data, true);
							$message = "Le point a été ajouté";
							break;
					}
				}
				else {
					$message = "Erreur de saisie, enregistrement annulé";
				}
			}
			$this->redirectToRoute('carte_interactive_liste');
		}
		else {
			$this->show('pages/carte-maj', ["id" => $id,
											"message" => $message]);
		}
	}

	public function liste() {
		$this->show('pages/carte-liste');
	}

	private function geolocalisation() {

		// Google Maps Geocoder
		$geocoder = "https://maps.googleapis.com/maps/api/geocode/json?address=%s&region=fr&sensor=false";
		$adrComplete = $this->adresse;
		$adrComplete .= ', '.$this->codepostal;
		$adrComplete .= ', '.$this->ville;

		// Requête envoyée à l'API Geocoding
		$query = sprintf($geocoder, urlencode(utf8_encode($adrComplete)));

		$result = json_decode(file_get_contents($query));
		if ($result->status == 'OK') {
			$json = $result->results[0];
			$this->longitude = $json->geometry->location->lng;
			$this->latitude = $json->geometry->location->lat;
		}
	}


}
