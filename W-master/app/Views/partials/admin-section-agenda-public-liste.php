


<!-- ///////////// Ajouté par Hasan ////////////  -->

<section >
	<div class=" container">
		<div class="text-center">
			<h3 class="titrsPage"> Liste des événements </h3>
			<a class="btn btn-success"  href="<?php echo $this->url('agenda_public')?>" >  Retour sur l'agenda </a>
			<button class="btn btn-success" data-toggle="modal" data-target="#idModalAjoutEvent">  Ajouter un événement </button> 

			
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
				<thead>
					<tr>
				    	<th class='text-center'> Id </th>
				    	<th class='text-center'> Titre </th>
				    	<th class='text-center'> Date  </th>
				    	<th class='text-center'> Chapo </th>
					    <th class='text-center'> Modifier </th>
					    <th class='text-center'> Supprimer </th>
					</tr>
				</thead>

				<tbody>
					<?php
						use \Model\AgendapublicModel;      

						$ObjetAgendapublic = new AgendapublicModel;  

						$tabResult = $ObjetAgendapublic -> findAll("dateEvent", "DESC") ;

						foreach ($tabResult as $tabLigne)  // boucle pour les lignes
						{
							echo "<tr>" ;
							foreach ($tabLigne as $nomColonne => $valeurColonne) // boucle pour les colonnes
							{
								switch ($nomColonne) 
								{
									case 'id':
									case 'titre':
									case 'dateEvent':
									case 'resume':
										echo "<td> $valeurColonne </td>" ;
									break;	
								}	
							}

							$id = $tabLigne["id"] ;    // recupérer l'ID de la ligne courante
							$hrefModifier  = $this->url('admin_agenda_public_update', ['id'=> $id] )  ;  // passer l'ID dans l'URL quand on clique sur modifier
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
		$("#idModalAjoutEvent").submit(function(){
		$("#idMessage").show() ;
		}) 
	</script>

</section>

		<div class="clearfix"></div>