


<!-- ///////////// Ajouté par Hasan ////////////  -->


	<div >
		<div class="text-center">
			<h3 class="titrsPage"> Liste des comptes </h3>
		</div> 
		<div class="clearfix "></div> <br/>

		<div class="table-responsive"> 	
			<table class="table table-striped " >
				<thead>
					<tr >
				    	<th class='text-center'> Id </th> 
				    	<th class='text-center'> Identifiant </th> 
				    	<th class='text-center'> Adresse mail </th> 
				    	<th class='text-center'> Rôle </th>
					    <th class='text-center'> Modifier </th> 
					    <th class='text-center'> Supprimer </th>
					</tr>
					
				</thead>

				<tbody>
					<?php
						use \W\Controller\Controller ; 
						use \W\Model\UsersModel;       

						$ObjetUser = new UsersModel;  

						$tabResult = $ObjetUser -> findAll("username", "DESC") ;
						foreach ($tabResult as $tabLigne)  // boucle pour les lignes
						{
							echo "<tr>" ;
							foreach ($tabLigne as $nomColonne => $valeurColonne) // boucle pour les colonnes
							{
								switch ($nomColonne) 
								{
									case 'id':
									case 'username':
									case 'email':
									case 'role':
										echo "<td> $valeurColonne </td>" ;
									break;	
								}
							}

							$id = $tabLigne["id"] ;    // recupérer l'ID de la ligne courante
							$hrefModifier  = $this->url('admin_users_signup_update', ['id'=> $id] )  ;  // passer l'ID dans l'URL quand on clique sur modifier
							$hrefSupprimer = "?id=$id&operation=supprimer" ;  // passer l'ID dans l'URL quand on clique sur Supprimer

							echo "<td class='text-center'> <a href = '$hrefModifier' class='btn btn-primary btn-sm' ><span class='glyphicon glyphicon-edit' aria-hidden='true'></span> </a> </td>"    ;
						    echo "<td class='text-center'> <a href = '$hrefSupprimer' class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> </a>  </td>" ;
							echo "</tr>" ;
						}
					?>
				</tbody>
			</table>

		</div>		
	</div>	
</section>

<div class="clearfix"></div>