<?php

	///////////// Ajouté par Hasan //////////// 


namespace Controller ;  

use \W\Controller\Controller ;       // c'est le chemain de la classe parente Controller
use \Model\AgendapublicModel;      // c'est le chemain pour le modele AgendapublicModel qui permet de sconnecter à la table agendaPublic  

class AgendaPublicController extends Controller
{
	
	public function agendaPublic($page=0)   // création de la méthode agenda qui est associée à la route /agenda
	{
		$this->show('pages/agenda', [ "page" => $page]);
	}



	public function agendaPublicEvent($titreUrl)   
	{
		$ObjetAgend = new AgendapublicModel;  
		$tabResult = $ObjetAgend->findAll() ;

		if ((!empty($tabResult)) && ($titreUrl) )   
		{            
			foreach ($tabResult as $tabLigne) 
			{
				if ($titreUrl == $tabLigne["titreUrl"])
				{
					$id  = $tabLigne["id"] ;
				}	
				 
			}
		}

		$this->show('pages/agenda-evenement', ['titreUrl' => $titreUrl, 'id' => $id]);
	}


}
?>	