<?php

	///////////// Modifié par Hasan //////////// 

$cheminAsset = $this->assetUrl('') ;
$insertHtml = 
<<<CODEHTML
	<link rel="stylesheet" href="$cheminAsset/css/css_agendaPublic/styleAgendPublic.css" />
CODEHTML;


	$this->insert("partials/01_header", ["title" => "Agenda", "insertHtml" => $insertHtml]);

	$this->insert("partials/section-agenda", [ "page" => $page]);
	
	$this->insert("partials/03_footer");

?>

