<?php
	$w_routes = array(
		// méthode , url, Controleur#methode, Nom de la route
		['GET|POST', '/', 'Default#accueil', 'default_accueil'],
		['GET|POST', '/nos_valeurs', 'Default#valeurs', 'default_valeurs'],
		['GET|POST', '/carte_interactive', 'Default#carte', 'default_carte'],
		['GET|POST', '/nos_rencontres', 'Default#rencontres', 'default_rencontres'],
		['GET|POST', '/heberger', 'Default#heberger', 'default_heberger'],
		['GET|POST', '/sensibiliser', 'Default#sensibiliser', 'default_sensibiliser'],
		['GET|POST', '/accompagner_a_la_langue', 'Default#langue', 'default_langue'],
		['GET|POST', '/guider', 'Default#guider', 'default_guider'],
		['GET|POST', '/le_juridique', 'Default#juridique', 'default_juridique'],
		['GET|POST', '/la_sante', 'Default#sante', 'default_sante'],
		['GET|POST', '/activites_economiques', 'Default#economie', 'default_economie'],
		['GET|POST', '/vie_sociale', 'Default#social', 'default_social'],
		['GET|POST', '/combattre_les_idees_recues', 'Default#ideesrecues', 'default_ideesrecues'],
		['GET|POST', '/actualites', 'Default#actualites', 'default_actualites'],
		['GET|POST', '/agenda', 'Default#agenda', 'default_agenda'],
		['GET|POST', '/outils_pedagogiques_bonnes_pratiques', 'Default#outils', 'default_outils'],
		['GET|POST', '/faq', 'Default#faq', 'default_faq'],
		['GET|POST', '/s_engager_comme_benevole', 'Default#benevole', 'default_benevole'],
		['GET|POST', '/je_propose', 'Default#propose', 'default_propose'],
		['GET|POST', '/adresses_utiles', 'Default#adresses', 'default_adresses'],
		['GET|POST', '/annuaire_adherents', 'Default#annuaire', 'default_annuaire'],
		['GET|POST', '/forum', 'Default#forum', 'default_forum'],
     //jai rajouté une route pour la page contact rachida
		['GET|POST', '/nous_contacter', 'Contact#contact', 'default_contact'],

		///////////// Ajouté par Hasan //////////// 
		['GET|POST' , '/admin/repertoire-langue'  		      , 'AdminLng#repertoireLangue' 	    , 'admin_repertoire_langue']          ,   
		['GET|POST' , '/admin/repertoire-langue-update/[:id]' , 'AdminLng#repertoireLangueUpdate'   , 'admin_repertoire_langue_update']   , 

		['GET|POST' , '/admin/agenda' , 'AdminAgenda#agenda'   , 'admin_agenda'],

		//  HVA ajouté le 13/04
		['GET|POST', '/carte_interactive/carte-liste' , 'Carte#liste', 'carte_interactive_liste'],
		['GET|POST', '/carte_interactive/carte-maj/[:id]', 'Carte#carteMaj', 'carte_maj'],

			
	);
