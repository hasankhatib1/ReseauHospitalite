<?php

	///////////// Modifié par Hasan //////////// 

$cheminAsset = $this->assetUrl('') ;
$insertHtml = 
<<<CODEHTML
	<link rel="stylesheet" href="$cheminAsset/css/css_agendaPublic/styleAgendPublic.css" />
	
	 <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
	  

CODEHTML;


	$this->insert("partials/01_header", ["title" => "Agenda - mettre à jour", "insertHtml" => $insertHtml]);

	$this->insert("partials/admin-section-agenda-public-update", ["id" => $id, "message" => $message]) ; 
	$this->insert("partials/admin-section-agenda-public-liste") ; 
	
	$this->insert("partials/03_footer");

?>