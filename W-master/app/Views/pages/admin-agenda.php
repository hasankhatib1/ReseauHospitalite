<?php

      ///////////// Ajouté par Hasan //////////// 

$cheminAsset = $this->assetUrl('') ;

$insertHtml = 
<<<CODEHTML
		<link rel="stylesheet" media="screen" href="$cheminAsset/css/css_agenda/cupertino/jquery-ui.min.css" />
		<link rel="stylesheet" media="screen"  href="$cheminAsset/css/css_agenda/fullcalendar.min.css" />

		<link rel="stylesheet" media="print" href="$cheminAsset/css/css_agenda/fullcalendar.print.min.css" />

		<link rel="stylesheet" href="$cheminAsset/css/bootstrap.min.css">

		<script type="text/javascript" src= "$cheminAsset/js/js_agenda/moment.min.js"> </script>
		<script type="text/javascript" src= "$cheminAsset/js/js_agenda/jquery.min.js">  </script>

		<script type="text/javascript" src= "$cheminAsset/js/js_agenda/fullcalendar.min.js"> </script>

		<script type="text/javascript" src= "$cheminAsset/js/js_agenda/fr.js"> </script> 

		<script type="text/javascript" src= "$cheminAsset/js/js_agenda/gcal.js"> </script> 

		<script src=" $cheminAsset/js/bootstrap.min.js"> </script>

		<script type="text/javascript" src= "$cheminAsset/js/js_agenda/script_agenda.js"> </script>

		<style>

		body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
		}

		#calendar {
		max-width: 900px;
		margin: 0 auto;
		}

		</style> 
CODEHTML;

 $this->insert("partials/01_header", ["title" => "Agenda", "insertHtml" => $insertHtml]);
$this->insert("partials/admin-section-agenda" ) ; 

$this->insert("partials/03_footer");

?>