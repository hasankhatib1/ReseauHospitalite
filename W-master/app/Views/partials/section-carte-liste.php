<!-- Ecran de modal confirmation -->
<div class="modal fade" id="frmConfirmation" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Confirmation</h4>
			</div>
			<div class="modal-body">
				<p class="text-center">
					Vous-êtes sur le point de supprimer "<span id="nomPoint"></span>"<br>Confirmez-vous ?
				</p>
				<input id="idModal" type="hidden">
			</div>
			<div class="modal-footer">
				<button type="button" id="btnOui" class="btn btn-success" data-dismiss="modal">Oui</button>
				<button type="button" id="btnNon" class="btn btn-default" data-dismiss="modal">Non</button>
			</div>
		</div>
	</div>
</div>


<section>
	<div class="container box">

		<h2 class="text-center titrsPage">Liste des points de la carte interactive</h2>
		<div class="text-center">
			<a class="btn btn-success" href="<?= $this->url('carte_maj', ["id" => -1])?>">Ajouter un point</a>
			<a class="btn btn-primary" href="<?= $this->url('default_carte')?>">Retourner sur la carte</a>
		</div>

		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Nom</th>
						<th>Adresse</th>
						<th>Ville</th>
						<th>Visible</th>
						<th class="text-center">Modifier</th>
						<th class="text-center">Supprimer</th>
					</tr>
				</thead>
				<tbody>
					<?php
						// $objpointscarte = new \Model\pointcartesModel;
						$objpointscarte = new \Model\CarteinteractiveModel;
						$tabPointscarte = $objpointscarte->findAll('adresse', 'ASC');
						foreach ($tabPointscarte as $pointcarte) {
							echo '<tr>';
							foreach ($pointcarte as $nomCol => $valCol) {
								switch ($nomCol) {
									case 'nom':
									case 'adresse':
									case 'ville':
										echo '<td class="colNom">'.$valCol.'</td>';
										break;
									case 'afficher':
										if ($valCol==0) echo '<td>Oui</td>';
										else echo '<td>Non</td>';
										break;
								break;
								}

							}
							$hrefModif = $this->url('carte_maj', ["id" => $pointcarte["id"]]);
							$id = $pointcarte["id"];
							$nom = $pointcarte["nom"];
							$hrefSuppr = $this->url('carte_sup', ["id" => $pointcarte["id"]]);
							echo
<<<CODEHTML
					<td class="text-center"><a class="btn btn-primary btn-sm" href="$hrefModif"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
					<td class="text-center"><a class="btn btn-danger btn-sm btnSuppr" data-nom="$nom" data-id="$id" href="$hrefSuppr"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
					</tr>
CODEHTML;
						}
					?>
				</tbody>
			</table>

		</div>
	</div>

	<script>
		var hrefSup = '';
		$('.btnSuppr').click(function(event){
			event.preventDefault();
			var id = $(this).data('id');
			var nom = $(this).data('nom');
			hrefSup = $(this).attr('href');
			$('#idModal').val(id);
			$('#nomPoint').html(nom);
			$('#frmConfirmation').modal('show');	
		})

		$('#btnOui').click(function(){
			location.href = hrefSup;
		})

	</script>

</section>