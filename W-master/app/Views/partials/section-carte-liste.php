<section>
	<div class="container">
		<h2>Liste des points de la carte interactive</h2>
		<table class="table table-striped">
			<thead>
				<?php
					$objpointscarte = new \Model\CarteinteractiveModel;
					$tabPointscarte = $objpointscarte->findAll('id', 'DESC', 1);
					foreach ($tabPointscarte as $pointcarte) {
						echo '<tr>';
						foreach ($pointcarte as $nomCol => $valCol) {
							switch ($nomCol) {
								case 'nom':
									echo '<th>Nom</th>';
									break;
								case 'adresse':
									echo '<th>Adresse</th>';
									break;
								case 'ville':
									echo '<th>Ville</th>';
									break;
								case 'afficher':
									echo '<th>Visible</th>';
									break;
							break;
							}
						}
						echo '<th>Modifier</th>';
						echo '<th>Supprimer</th>';
						echo '</tr>';
					}
				?>
			</thead>
			<tbody>
				<?php
					// $objpointscarte = new \Model\pointcartesModel;
					$tabPointscarte = $objpointscarte->findAll('id', 'DESC');
					foreach ($tabPointscarte as $pointcarte) {
						echo '<tr>';
						foreach ($pointcarte as $nomCol => $valCol) {
							switch ($nomCol) {
								case 'nom':
								case 'adresse':
								case 'ville':
									echo '<td>'.$valCol.'</td>';
									break;
								case 'afficher':
									if ($valCol==0) echo '<td>Oui</td>';
									else echo '<td>Non</td>';
									break;
							break;
							}

						}
						$hrefModif = $this->url('carte_maj', ["id" => $pointcarte["id"]]);
						$hrefSuppr = "?id=".$pointcarte["id"]."&operation=supprimer";
						echo
<<<CODEHTML
						<td class="text-center"><a href="$hrefModif"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
						<td class="text-center"><a href="$hrefSuppr"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
						</tr>
CODEHTML;
					}
				?>
			</tbody>
		</table>
		<button class="btn btn-default"><a href="<?= $this->url('carte_maj', ["id" => -1])?>">Ajouter un point</a></button>
		<button class="btn btn-default"><a href="<?= $this->url('default_carte')?>">Retourner sur la carte</a></button>
	</div>
</section>