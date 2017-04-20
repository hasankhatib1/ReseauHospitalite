<?php

	///////////// Ajouté par Hasan //////////// 


namespace Controller ;  

use \W\Controller\Controller ;       // c'est le chemain de la classe parente Controller
use \Model\AgendapublicModel;      // c'est le chemain pour le modele AgendapublicModel qui permet de sconnecter à la table agendaPublic  

class AdminAgendaPublicController extends Controller
{


	public function agendaPublicAjout()   // création de la méthode agenda qui est associée à la route /agenda
	{
		$this->allowTo(["admin", "redecteur", "utilisateur"]); // Protéger l'accès à cette page (la connexion à cette page et autériser seulement aux utilisateurs qui ont le rôle : "admin", "super-admin, .... ")

		$message = "" ;

		// /* ************************** Ajouter un événement *************************** */
									
		if (isset($_REQUEST["operation"]) && ($_REQUEST["operation"] == "ajouter"))  
		{
			$safe = $_REQUEST ;

			if(isset($_FILES['photo']))    // la méthode FILES pour récuperer le ou les fichier técléchargés
			{ 
				$repertoire = "$this->assetUrl('img/img_agenda/')" ;   // image/ c'est le répertoire dans le quel les fichiers téléchargés vont être stockés
				$tmpName = $_FILES['photo']['tmp_name']  ;          // un nom temporaire du fichier
				$fichier = $_FILES['photo']['name']      ;         // le nom origine du fichier téléchargé
			}

			if(isset($_FILES['docTelecharge']))    // la méthode FILES pour récuperer le ou les fichier técléchargés
			{ 
				$repertoire = "$this->assetUrl('img/img_agenda/')" ;   // image/ c'est le répertoire dans le quel les fichiers téléchargés vont être stockés
				$tmpName = $_FILES['docTelecharge']['tmp_name']  ;          // un nom temporaire du fichier
				$fichierDoc = $_FILES['docTelecharge']['name']      ;         // le nom origine du fichier téléchargé
			}

			$titre     		= trim($safe["titre"]) 		   ;   
			$titreUrl       = trim($safe["titreUrl"]) 	   ;
			$dateEvent      = trim($safe["dateEvent"]) 	   ;
			$resume		    = trim($safe["resume"]) 	   ;
			$description 	= trim($safe["description"] )  ;
			$photo       	= trim($fichier) 		       ;
			$docTelecharge  = trim($fichierDoc) 		   ;




			if(	is_string($titre)         && ( mb_strlen($titre) > 0 )
                && is_string($titreUrl)   && ( mb_strlen($titreUrl) > 0 ) 
                && is_string($dateEvent)  && ( mb_strlen($dateEvent) > 0 ) 
                && is_string($resume)     && ( mb_strlen($resume) > 0 ) 
                && is_string($fichier)    && ( mb_strlen($fichier) > 0 ) )
			{

				$ObjetAgendapublic = new AgendapublicModel; 

				$ObjetAgendapublic->insert([
                "titre"  		 => $titre, 
                "titreUrl"       => $titreUrl, 
                "dateEvent"      => $dateEvent, 
                "resume"       	 => $resume, 
                "description"    => $description, 
                "photo"  		 => $fichier, 
                "docTelecharge"  => $fichierDoc ], false);

                $message = "Evenement ajoutée" ;

			}
			else
			{
				$message = "Erreur : Infos incorrecte" ;
			}
			
		}


		// /* ************************** supprimer un événement *************************** */

		if (isset($_REQUEST["operation"]) && ($_REQUEST["operation"] == "supprimer"))
		{
			$safe = array_map('strip_tags', $_REQUEST) ;
			$id     = intval(trim($safe["id"])) ; // intval transforme le text en nombre
			if ($id > 0)
			{
				$ObjetAgendapublic = new AgendapublicModel;  

				$ObjetAgendapublic->delete($id) ; // effacer la ligne 
				$this->redirectToRoute('agenda-public-ajout');

				$message = "Evénement supprimé " ;
			}
		}


		$this->show('pages/admin-agenda-public-ajout', ["message" => $message]); 
	}


/* ************************** modifier un événement *************************** */

	public function agendaPublicUpdate($id)   
	{
		$this->allowTo(["admin", "redecteur", "utilisateur"]); // Protéger l'accès à cette page (la connexion à cette page et autériser seulement aux utilisateurs qui ont le rôle : "admin", "super-admin, .... ")

		$message = "" ;

		if (isset($_REQUEST["operation"]) && ($_REQUEST["operation"] == "modifier"))
		{
			$safe = $_REQUEST;

			if(isset($_FILES['photo']))    // la méthode FILES pour récuperer le ou les fichier técléchargés
			{ 
				$repertoire = "$this->assetUrl('img/img_agenda/')" ;   // image/ c'est le répertoire dans le quel les fichiers téléchargés vont être stockés
				$tmpName = $_FILES['photo']['tmp_name']  ;          // un nom temporaire du fichier
				$fichier = $_FILES['photo']['name']      ;         // le nom origine du fichier téléchargé
			}

			if(isset($_FILES['docTelecharge']))    // la méthode FILES pour récuperer le ou les fichier técléchargés
			{ 
				$repertoire = "$this->assetUrl('img/img_agenda/')" ;   // image/ c'est le répertoire dans le quel les fichiers téléchargés vont être stockés
				$tmpName = $_FILES['docTelecharge']['tmp_name']  ;          // un nom temporaire du fichier
				$fichierDoc = $_FILES['docTelecharge']['name']      ;         // le nom origine du fichier téléchargé
			}

			

			$titre     		= trim($safe["titre"]) 		   ;   
			$titreUrl       = trim($safe["titreUrl"]) 	   ;
			$dateEvent      = trim($safe["dateEvent"]) 	   ;
			$resume		    = trim($safe["resume"]) 	   ;
			$description 	= trim($safe["description"] )  ;
			$photo       	= trim($fichier) 		       ;
			$docTelecharge  = trim($fichierDoc) 		   ;

			if(	is_string($titre)         && ( mb_strlen($titre) > 0 )
                && is_string($titreUrl)   && ( mb_strlen($titreUrl) > 0 ) 
                && is_string($dateEvent)  && ( mb_strlen($dateEvent) > 0 ) 
                && is_string($resume)     && ( mb_strlen($resume) > 0 ) 
                && is_string($fichier)    && ( mb_strlen($fichier) > 0 ) )
			{

				$ObjetAgendapublic = new AgendapublicModel; 


				$ObjetAgendapublic->update([
                "titre"  		 => $titre, 
                "titreUrl"       => $titreUrl, 
                "dateEvent"      => $dateEvent, 
                "resume"       	 => $resume, 
                "description"    => $description, 
                "photo"  		 => $fichier, 
                "docTelecharge"  => $fichierDoc ] , $id, false);

                $this->redirectToRoute('admin_agenda_public_ajout');
                $message = "Evénement modifiée " ;
			}
			else
			{
				$message = "Erreur : Infos incorrecte" ;
				$this->redirectToRoute('admin_agenda_public_ajout');
			}
		}

		$this->show('pages/admin-agenda-public-update', [ "id" => $id, "message" => $message]);
	}



}	

?>