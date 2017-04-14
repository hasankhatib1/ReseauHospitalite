


<!-- ///////////// Ajouté par Hasan ////////////  -->

<section >
	<div>
		<div class="text-center">
			<h3 > Liste des comptes </h3>
		</div> 
		<div class="clearfix "></div> <br/>
		<div > 	
			<table class="table table-bordered table-striped table-responsive container" >  <!-- style="display: flex; flex-wrap: wrap;" -->
				<thead class='text-center'>
					<?php
						use \W\Controller\Controller ; // c'est le chemain de la classe parente Controller
						use \W\Model\UsersModel;       // c'est le chemain d'une classe de Frame W nommée UsersModel   (pour se connecter à la base de données : table : users)

						$ObjetUser = new UsersModel;  // création d'un objet sur la classe RepertoireLngModel 

					    echo "<tr>";
					    	echo "<th> Id </th>" ;
					    	echo "<th> Identifiant </th>" ;
					    	echo "<th> Adresse mail </th>" ;
					    	echo "<th> Mot de passe (crypté) </th>" ;
					    	echo "<th> Rôle </th>" ;
						    echo "<th> Modifier </th>" ;
						    echo "<th> Supprimer </th>" ;
					    echo "</tr>";
					?>
				</thead>

				<tbody>
					<?php
						$tabResult = $ObjetUser -> findAll("username", "DESC") ;
						foreach ($tabResult as $tabLigne)  // boucle pour les lignes
						{
							echo "<tr>" ;
							foreach ($tabLigne as $nomColonne => $valeurColonne) // boucle pour les colonnes
							{
								echo "<td> $valeurColonne </td>" ;
							}

							$id = $tabLigne["id"] ;    // recupérer l'ID de la ligne courante
							$hrefModifier  = $this->url('admin_users_signup_update', ['id'=> $id] )  ;  // passer l'ID dans l'URL quand on clique sur modifier
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