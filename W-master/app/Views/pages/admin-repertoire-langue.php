<?php

      ///////////// Ajouté par Hasan //////////// 

$this->insert("partials/01_header", ["title" => "Repertoire Acteurs FLE/FLI/ALPHA/ILLETTRISME - Marseille"]);

$this->insert("partials/admin-section-repertoire-langue-liste") ; 
$this->insert("partials/admin-section-repertoire-langue-ajouter", ["message" => $message]) ; 

$this->insert("partials/03_footer");

?>