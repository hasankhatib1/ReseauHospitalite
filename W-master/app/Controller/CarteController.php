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
		return true;
	}

	// le framworke w va extraire de l'url l'info qui correspond à [:id] (voir route.php)
	// et va le passer en prm de la méthode
	public function carteMaj ($id) {
		$message = "";

		if (!empty($_REQUEST)) {
			$safe = array_map('strip_tags', $_REQUEST);
			if (isset($safe['operation'])) {
				if ($safe['operation']=='modifier') {
					if ($this->verifSaisie($safe)) {
						$objpointscarte = new \Model\CarteinteractiveModel;
						$objpointscarte->update([
							"nom" => $this->nom,
							"description" => $this->description,
							"categorie" => $this->categorie,
							"adresse" => $this->adresse,
							"codepostal" => $this->codepostal,
							"ville" => $this->ville,
							"longitude" => $this->longitude,
							"latitude" => $this->latitude,
							"url" => $this->url,
							"afficher" => $this->afficher,
						], $id);
						$message = "Point enregistré";
					}
					else {
						$message = "Erreur de saisie, enregistrement annulé";
					}
				}
			}
		}

		$this->show('pages/carte-maj', ["id" => $id,
										  "message" => $message]);
	}

	public function liste() {
		$this->show('pages/carte-liste');
	}

}