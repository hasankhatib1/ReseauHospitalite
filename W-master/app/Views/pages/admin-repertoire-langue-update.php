<?php

// Ajouté par Hasan

$this->insert("partials/01_header", ["title" => "Modifier le Repertoire Acteurs FLE/FLI/ALPHA/ILLETTRISME - Marseille"]);

$this->insert("partials/admin-section-repertoire-langue-update", ["id" => $id, "message" => $message]) ; 
$this->insert("partials/admin-section-repertoire-langue-liste") ; 

$this->insert("partials/03_footer");

?>