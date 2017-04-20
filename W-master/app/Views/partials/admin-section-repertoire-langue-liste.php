


<!-- ///////////// Ajouté par Hasan ////////////  -->

<section >
	<div class=" container">
		<div class="text-center">
			<h3 class="titrsPage"> Répertoire des acteurs FLE / FLI, alphabétisation et illettrisme à Marseille </h3>
			<button class="btn btn-success" data-toggle="modal" data-target="#idModalAjoutStrcture">  Ajouter une structure de langue </button> 
			
			<?php 
			if (isset($message))
			{
			?>
				<div class="alert alert-success alert-dismissible " id="idMessage">
					<p  class="close" data-dismiss="alert" aria-label="close">&times;</p>
					<strong> <?php echo $message ?> </strong>
				</div>

			<?php		
			}	
			?>
		</div> 
		<div class="clearfix "></div> <br/>

		<div class="table-responsive"> 	
			<table class="table table-striped " >  <!-- style="display: flex; flex-wrap: wrap;" -->
				<thead class='text-center'>
					<tr>
				    	<th> Id </th>
				    	<th> Arrond. </th>
				    	<th> Structure </th>
				    	<th> Adresse </th>
				    	<th> Téléphone </th>
				    	<th> Mail </th>
				    	<th> Contact </th>
				    	<th> Type de formation </th>
				    	<th> Cotisation, publics,... </th>
				    	<th> Places disponibles </th>
				    	<th> Horaires ateliers </th>
				    	<th> Horaires permanence </th>
				    	<th> Informations complémentaires </th>
					    <th> Modifier </th>
					    <th> Supprimer </th>
					</tr>
				</thead>

				<tbody>
					<?php
						use \Model\RepertoirelngModel;       // c'est le chemain de la classe RepertoireLngModel (pour se connecter à la base de données)

						$ObjetRepertoireLng = new RepertoirelngModel;  // création d'un objet sur la classe RepertoireLngModel 

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

							echo "<td class='text-center'> <a href = '$hrefModifier' id='idUpdateStrcture' class='btn btn-primary btn-sm'> <span class='glyphicon glyphicon-edit' aria-hidden='true'> </a> </td>"    ;
						    echo "<td class='text-center'> <a href = '$hrefSupprimer' class='btn btn-danger btn-sm'> <span class='glyphicon glyphicon-trash' aria-hidden='true'> </a>  </td>" ;
							echo "</tr>" ;
						}
					?>
				</tbody>
			</table>
		</div>
	</div>	

	<script type="text/javascript"> 
		$("#idFormAjoutUser").submit(function(){
		$("#idMessage").show() ;
		}) 
	</script>

</section>

		<div class="clearfix"></div>