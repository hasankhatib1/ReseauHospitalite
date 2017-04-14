


<!-- ///////////// Ajouté par Hasan ////////////  -->

<section >
	<div>
		<div class="text-center">
			<h3 > Répertoire des acteurs FLE / FLI, alphabétisation et illettrisme à Marseille </h3>
			<button class="btn btn-success" data-toggle="modal" data-target="#idModalAjoutStrcture" >  Ajouter une structure de langue </button> 
		</div> 
		<div class="clearfix "></div> <br/>
		<div > 	
			<table class="table table-bordered table-striped table-responsive container" >  <!-- style="display: flex; flex-wrap: wrap;" -->
				<thead class='text-center'>
					<?php
						use \Model\RepertoirelngModel;       // c'est le chemain de la classe RepertoireLngModel (pour se connecter à la base de données)
						$ObjetRepertoireLng = new RepertoirelngModel;  // création d'un objet sur la classe RepertoireLngModel 

					    echo "<tr>";
					    	echo "<th> Id </th>" ;
					    	echo "<th> Arrond. </th>" ;
					    	echo "<th> Structure </th>" ;
					    	echo "<th> Adresse </th>" ;
					    	echo "<th> Téléphone </th>" ;
					    	echo "<th> Mail </th>" ;
					    	echo "<th> Contact </th>" ;
					    	echo "<th> Type de formation </th>" ;
					    	echo "<th> Cotisation, publics,... </th>" ;
					    	echo "<th> Places disponibles </th>" ;
					    	echo "<th> Horaires ateliers </th>" ;
					    	echo "<th> Horaires permanence </th>" ;
					    	echo "<th> Informations complémentaires </th>" ;
						    echo "<th> Modifier </th>" ;
						    echo "<th> Supprimer </th>" ;
					    echo "</tr>";
					?>
				</thead>

				<tbody>
					<?php
						$tabResult = $ObjetRepertoireLng -> findAll("arrondissement", "ASC") ;
						foreach ($tabResult as $tabLigne)  // boucle pour les lignes
						{
							echo "<tr>" ;
							foreach ($tabLigne as $nomColonne => $valeurColonne) // boucle pour les colonnes
							{
								echo "<td> $valeurColonne </td>" ;
							}

							$id = $tabLigne["id"] ;    // recupérer l'ID de la ligne courante
							$hrefModifier  = $this->url('admin_repertoire_langue_update', ['id'=> $id] )  ;  // passer l'ID dans l'URL quand on clique sur modifier
							$hrefSupprimer = "?id=$id&operation=supprimer" ;  // passer l'ID dans l'URL quand on clique sur Supprimer

							echo "<td> <a href = '$hrefModifier' id='idUpdateStrcture'> Modifier </a> </td>"    ;
						    echo "<td> <a href = '$hrefSupprimer'> Supprimer </a>  </td>" ;
							echo "</tr>" ;
						}
					?>
				</tbody>
			</table>
		</div>
			<script type="text/javascript"> 
			$(function(){
			$("#idModalAjoutStr").modal('show') ;
			}) 
		</script>
	</div>	
</section>

		<div class="clearfix"></div>