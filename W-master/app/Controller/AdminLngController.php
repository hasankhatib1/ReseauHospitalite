<?php


					///////////// Ajouté par Hasan //////////// 



namespace Controller ;  // c'est le nom du dossier dans lequel la classe est crée

use \W\Controller\Controller ;       // c'est le chemain de la classe parente Controller
use \Model\RepertoirelngModel;       // c'est le chemain pour le modèle RepertoireLngModel (pour se connecter à la base de données)

class AdminLngController extends Controller
{
	/**
	 * Page de connexion (admin-repertoire-langue) 
	 */
	public function repertoireLangue()   // création de la méthode repertoireLangue qui est associée à la route /admin/repertoire-langue
	{

        $this->allowTo(["admin", "redecteur", "utilisateur"]); // Protéger l'accès à cette page (la connexion à cette page et autériser seulement les utilisateurs qui ont le rôle : "admin", "super-admin, .... ")


		$message = "" ;

		// /* ************************** Ajouter une structure de langue *************************** */
									
		if (isset($_REQUEST["operation"]) && ($_REQUEST["operation"] == "ajouter"))  // traiter le formulaire :admin-section-repertoire-langue-ajouter.php
		{
			$safe = array_map('strip_tags', $_REQUEST) ;

			$arrondissement  = trim($safe["arrondissement"]) ;   
			$structure       = trim($safe["structure"]) ;
			$adresse         = trim($safe["adresse"]) ;
			$tel		     = trim($safe["tel"]) ;
			$mail 			 = trim($safe["mail"] );
			$contact       	 = trim($safe["contact"]) ;
			$formation       = trim($safe["formation"]) ;
			$cotisation      = trim($safe["cotisation"]) ;
			$placesDispo     = trim($safe["placesDispo"]) ;
			$hAteliers       = trim($safe["hAteliers"]) ;
			$hPermanence     = trim($safe["hPermanence"]) ;
			$infoComp        = trim($safe["infoComp"]) ;


			if(	is_string($arrondissement) 	
					&& is_string($structure)    && ( mb_strlen($structure) > 0 )
                    && is_string($adresse)      && ( mb_strlen($adresse) > 0 ) 
                    && is_string($tel    )      && ( mb_strlen($tel) > 0 ) 
                    && is_string($mail)         && ( mb_strlen($mail) > 0 ) 
                    && is_string($formation)    && ( mb_strlen($formation) > 0 ) 
                    && is_string($cotisation)   && ( mb_strlen($cotisation) > 0 )  
                    && is_string($placesDispo)  && ( mb_strlen($placesDispo) > 0 ) 
                    && is_string($hAteliers)    && ( mb_strlen($hAteliers) > 0 )
                    && is_string($hPermanence)  && ( mb_strlen($hPermanence) > 0 ) )
				{

					$ObjetRepertoireLng = new RepertoirelngModel;  // création d'un objet sur la classe RepertoireLngModel 

					$ObjetRepertoireLng->insert([
                    "arrondissement"  => $arrondissement, 
                    "structure"       => $structure, 
                    "adresse"         => $adresse, 
                    "tel"       	  => $tel, 
                    "mail"     		  => $mail, 
                    "contact"  		  => $contact, 
                    "formation"       => $formation, 
                    "cotisation"      => $cotisation,
                    "placesDispo"     => $placesDispo,
                    "hAteliers"       => $hAteliers,
                    "hPermanence"     => $hPermanence,
                    "infoComp"        => $infoComp ]);

                    $message = "Structure ajoutée" ;

				}
				else
				{
					$message = "Erreur : Infos incorrecte" ;
				}
		}



		// /* ************************** supprimer une structure de langue *************************** */

		if (isset($_REQUEST["operation"]) && ($_REQUEST["operation"] == "supprimer"))
		{
			$safe = array_map('strip_tags', $_REQUEST) ;
			$id     = intval(trim($safe["id"])) ; // intval transforme le text en nombre
			if ($id > 0)
			{
				$ObjetRepertoireLng = new RepertoirelngModel;  // création d'un objet sur la classe RepertoireLngModel 

				$ObjetRepertoireLng->delete($id) ; // effacer la ligne 
				$this->redirectToRoute('admin_repertoire_langue');
			}
		}


		$this->show('pages/admin-repertoire-langue', ["message" => $message]); // afficher la page (admin-repertoire-langue.php) dans le dossier (pages) qui doit se trouver dans le dossier Views
	}


/* ************************** modifier une structure de langue *************************** */

	public function repertoireLangueUpdate($id)   
	{
		$this->allowTo(["admin", "redecteur", "utilisateur"]); // Protéger l'accès à cette page (la connexion à cette page et autériser seulement aux utilisateurs qui ont le rôle : "admin", "super-admin, .... ")

		$message = "" ;

		if (isset($_REQUEST["operation"]) && ($_REQUEST["operation"] == "modifier"))
		{
			$safe = array_map('strip_tags', $_REQUEST) ;

			$arrondissement  = trim($safe["arrondissement"]) ;   
			$structure       = trim($safe["structure"]) ;
			$adresse         = trim($safe["adresse"]) ;
			$tel		     = trim($safe["tel"]) ;
			$mail 			 = trim($safe["mail"] );
			$contact       	 = trim($safe["contact"]) ;
			$formation       = trim($safe["formation"]) ;
			$cotisation      = trim($safe["cotisation"]) ;
			$placesDispo     = trim($safe["placesDispo"]) ;
			$hAteliers       = trim($safe["hAteliers"]) ;
			$hPermanence     = trim($safe["hPermanence"]) ;
			$infoComp        = trim($safe["infoComp"]) ;

			if(	is_string($arrondissement) 	
				&& is_string($structure)    && ( mb_strlen($structure) > 0 )
                && is_string($adresse)      && ( mb_strlen($adresse) > 0 ) 
                && is_string($tel    )      && ( mb_strlen($tel) > 0 ) 
                && is_string($mail)         && ( mb_strlen($mail) > 0 ) 
                && is_string($formation)    && ( mb_strlen($formation) > 0 ) 
                && is_string($cotisation)   && ( mb_strlen($cotisation) > 0 )  
                && is_string($placesDispo)  && ( mb_strlen($placesDispo) > 0 ) 
                && is_string($hAteliers)    && ( mb_strlen($hAteliers) > 0 )
                && is_string($hPermanence)  && ( mb_strlen($hPermanence) > 0 ) )
				{

					$ObjetRepertoireLng = new RepertoirelngModel; 

					$ObjetRepertoireLng->update([
                    "arrondissement"  => $arrondissement, 
                    "structure"       => $structure, 
                    "adresse"         => $adresse, 
                    "tel"       	  => $tel, 
                    "mail"     		  => $mail, 
                    "contact"  		  => $contact, 
                    "formation"       => $formation, 
                    "cotisation"      => $cotisation,
                    "placesDispo"     => $placesDispo,
                    "hAteliers"       => $hAteliers,
                    "hPermanence"     => $hPermanence,
                    "infoComp"        => $infoComp ] , $id);

                    $message = "Structure modifiée " ;
                    $this->redirectToRoute('admin_repertoire_langue');
				}
				else
				{
					$message = "Erreur : Infos incorrecte" ;
				}
		}

		$this->show('pages/admin-repertoire-langue-update', ["id" => $id , "message" => $message]); // afficher la page (admin-repertoire-langue-update.php) dans le dossier (pages) qui doit se trouver dans le dossier Views
	}	
}



?>