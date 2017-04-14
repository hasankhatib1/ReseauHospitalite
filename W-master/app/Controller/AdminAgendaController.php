<?php


					///////////// Ajouté par Hasan //////////// 



namespace Controller ;  // c'est le nom du dossier dans lequel la classe est crée

use \W\Controller\Controller ;       // c'est le chemain de la classe parente Controller
use \Model\AgendaModel;       // c'est le chemain de la classe AgendaModel (pour se connecter à la base de données)

class AdminAgendaController extends Controller
{
	/**
	 * Page de connexion (admin-repertoire-langue) 
	 */
	public function agenda()   // création de la méthode agenda qui est associée à la route /admin/agenda
	{

      //  $this->allowTo(["admin", "redecteur"]); // Protéger l'accès à cette page (la connexion à cette page et autériser seulement les utilisateurs qui ont le rôle : "admin", "super-admin, .... ")

		// /* ************************** Ajouter une structure de langue *************************** */
									
		if (isset($_REQUEST["operation"]) && ($_REQUEST["operation"] == "ajouter"))  // traiter le formulaire :admin-section-repertoire-langue-ajouter.php
		{


		}


		// /* ************************** supprimer une structure de langue *************************** */

		if (isset($_REQUEST["operation"]) && ($_REQUEST["operation"] == "supprimer")) 
		{


		}



		if (isset($_REQUEST["operation"]) && ($_REQUEST["operation"] == "modifier"))
		{
		

		}


		$this->show('pages/admin-agenda'); // afficher la page (admin-repertoire-langue.php) dans le dossier (pages) qui doit se trouver dans le dossier Views

	}



}
