<?php

						///////////// Ajouté par Hasan //////////// 

$this->insert("partials/01_header", ["title" => "Créer un compte"]);

$this->insert("partials/admin-users-section-signup", ['message' => $message]) ; 
$this->insert("partials/admin-users-section-signup-liste") ; 

$this->insert("partials/03_footer");

?>