<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function accueil() {
		$this->show('pages/accueil');
	}

	/* Autres pages du menu */
	public function valeurs() {
		$this->show('pages/valeurs');
	}
	public function carte() {
		$this->show('pages/carte');
	}
	public function rencontres() {
		$this->show('pages/rencontres');
	}
	public function heberger() {
		$this->show('pages/heberger');
	}
	public function sensibiliser() {
		$this->show('pages/sensibiliser');
	}
	public function langue() {
		$this->show('pages/langue');
	}
	public function guider() {
		$this->show('pages/guider');
	}
	public function juridique() {
		$this->show('pages/juridique');
	}
	public function sante() {
		$this->show('pages/sante');
	}
	public function economie() {
		$this->show('pages/economie');
	}
	public function social() {
		$this->show('pages/social');
	}
	public function ideesrecues() {
		$this->show('pages/ideesrecues');
	}
	public function actualites($page=0) {
		$this->show('pages/actualites', [ "page" => $page]); // jai change 14/04 rachida
	}
	public function agenda() {
		$this->show('pages/agenda');
	}
	public function outils() {
		$this->show('pages/outils');
	}
	public function faq() {
		$this->show('pages/faq');
	}
	public function benevole() {
		$this->show('pages/benevole');
	}
	public function propose() {
		$this->show('pages/propose');
	}
	public function adresses() {
		$this->show('pages/adresses');
	}
	public function annuaire() {
		$this->show('pages/annuaire');
	}
	public function forum() {
		$this->show('pages/forum');
	}
	

}