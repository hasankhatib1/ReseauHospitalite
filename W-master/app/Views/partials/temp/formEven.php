<?php

//script d'ajout d'un fournisseur ds la BDD
$titrePage="Ajout d'un Evenement";
include "includes/header.php";
include "includes/nav.php";



?>
<div class="row">
     <div class="box col-md-offset-2 col-lg-8 ">
        <div class="text-center">
		   <form action="ajouEven.php" method="post" enctype="multipart/form-data">
			
			<div class="form-group">
				<label for="nomEven">Nom du l'évenement</label>
				<input type="text" name="nomEven" id="nomEven" class="form-control"/>
			</div>

			<div class="form-group">
				<label for="libEven">libellé Evenement</label>
				<input type="text" name="libEven" id="libEven" class="form-control"/>
			</div>

			<div class="form-group">
				<label for="dateEven">Date</label>
				<input type="Date" name="dateEven" id="dateEven" class="form-control"/>
			</div>

			<div class="form-group">
				<label for="descriptionEven">Description Evenement</label>
				<input type="text" name="descriptionEven" id="descriptionEven" class="form-control"/>
			</div>
		    <div class="form-group">
				<label for="fichier">Photo</label>
		        <input type="file" name="file" class="form-control" id="fichier" />
	        </div>
	


	         <div class="form-group" text-center>
		       <input type="submit" name="btnSub"  class="btn btn-success"/>
	        </div>
       </form>
       </div>
       </div>
       </div>
