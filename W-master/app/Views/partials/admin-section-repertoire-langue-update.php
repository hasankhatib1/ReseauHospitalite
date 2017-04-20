<?php


///////////// Ajouté par Hasan //////////// 


use \Model\RepertoirelngModel;       // c'est le chemain de la classe RepertoireLngModel (pour se connecter à la base de données)
$ObjetRepertoireLng = new RepertoirelngModel;  // création d'un objet sur la classe RepertoireLngModel 
$tabResult = $ObjetRepertoireLng->find($id) ;

if (!empty($tabResult))   // recuperer les informations de la structure de langue
{
	$arrondissement  = $tabResult["arrondissement"] ;   
	$structure       = $tabResult["structure"] ;
	$adresse         = $tabResult["adresse"] ;
	$tel		     = $tabResult["tel"] ;
	$mail 			 = $tabResult["mail"] ;
	$contact       	 = $tabResult["contact"] ;
	$formation       = $tabResult["formation"] ;
	$cotisation      = $tabResult["cotisation"] ;
	$placesDispo     = $tabResult["placesDispo"] ;
	$hAteliers       = $tabResult["hAteliers"] ;
	$hPermanence     = $tabResult["hPermanence"] ;
	$infoComp        = $tabResult["infoComp"] ;

?>

	<section>

		<div class="container">
			<form method="POST" action="" class="form-horizontal text-center" >
				
				<div class="modal fade" id="idModalUpdateStrcture" role="dialog" >   <!-- Modal -->
					<div class="modal-dialog " >
	  					<div class="modal-content">   <!-- Modal content-->

	    					<div class="modal-header"> <!-- Modal Header-->
	      						<button type="button" class="close fermer" data-dismiss="modal">&times;</button>
	      						<h6 class="modal-title titrsPage"> Modifier une structure de langue </h6>
	    					</div> <!-- Fin Modal Header-->

	    					<div class="modal-body"> <!-- Modal Body-->

	    					<div class="form-group">
								<label class="col-sm-3  control-label"> Structure </label>
								<div class="col-sm-8  ">
									<input type="text" name="structure" placeholder="Nom de la structure" required class="form-control"  value="<?php echo $structure ?>" > <br/>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3  control-label"> Adresse </label>
								<div class="col-sm-8  ">
									<input type="text" name="adresse" placeholder="Adresse" required class="form-control" value="<?php echo $adresse ?>" > <br/>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3  control-label"> Arrondissement </label>
								<div class=" col-sm-8  " >
									<select name="arrondissement" class="form-control" required >  <!--  créer une liste déroulante  -->
										<option selected> <?php echo $arrondissement ?> </option>
										<option> 13001 </option>
										<option> 13002 </option>
										<option> 13003 </option>
										<option> 13004 </option>
										<option> 13005 </option>
										<option> 13006 </option>
										<option> 13007 </option>
										<option> 13008 </option>
										<option> 13009 </option>
										<option> 13010 </option>
										<option> 13011 </option>
										<option> 13012 </option>
										<option> 13013 </option>
										<option> 13014 </option>
										<option> 13015 </option>
										<option> 13016 </option>
										<option> Autre </option>
									</select>	
								</div>
							</div>
								<div class="clearfix "></div><br/>

							<div class="form-group">	
								<label class="col-sm-3  control-label"> Téléphone </label>
								<div class="col-sm-8  ">
									<input type="tel" name="tel" placeholder="Téléphone" required class="form-control" value="<?php echo $tel ?>"> <br/>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3  control-label"> Mail </label>
								<div class="col-sm-8  ">
									<input type="mail" name="mail" placeholder="Mail" required class="form-control" value="<?php echo $mail ?>"> <br/>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3  control-label"> Contact </label>
								<div class="col-sm-8  ">
									<input type="text" name="contact" placeholder="Personne(s) de contact et coordonnées"  class="form-control" value="<?php echo $contact ?>"> <br/>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3  control-label"> Type de formation </label>
								<div class="col-sm-8  ">
									<input type="text" name="formation" placeholder="Type de formation FLE/FLI/Alpha/Illettrisme" required class="form-control" value="<?php echo $formation ?>"> <br/>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3  control-label"> Cotisation et publics </label>
								<div class="col-sm-8  ">
									<input type="text" name="cotisation" placeholder="Frais, cotisation, type publique ..." required class="form-control" value="<?php echo $cotisation ?>"> <br/>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3  control-label"> Places disponibles </label>
								<div class="col-sm-8  ">
									<input type="text" name="placesDispo" placeholder="Nombre de Places disponibles" required class="form-control" value="<?php echo $placesDispo ?>"> <br/>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3  control-label"> Horaires ateliers </label>
								<div class="col-sm-8  ">
									<input type="text" name="hAteliers" placeholder="Horaires ateliers" required class="form-control" value="<?php echo $hAteliers ?>"> <br/>
								</div>
							</div>	

							<div class="form-group">
								<label class="col-sm-3  control-label"> Horaires permanence </label>
								<div class="col-sm-8  ">
									<input type="text" name="hPermanence" placeholder="Horaires permanence" required class="form-control" value="<?php echo $hPermanence ?>"> <br/>
								</div>
							</div>
								
							<div class="form-group">
								<label class="col-sm-3  control-label"> Informations complémentaires </label> 
								<div class="col-sm-8  ">
									<textarea name="infoComp"  placeholder="Informations complémentaires" cols="60" rows="3" class="form-control"> <?php echo $infoComp ?></textarea> 
								</div>
							</div>	

								<div class="clearfix "></div>

							</div> <!-- Fin Modal Body-->

	    					<div class="modal-footer"> <!-- Modal Footer-->
								<div class="form-group text-center">	
									<button type="submit" class="btn btn-success" id="idBtnUpdateStrcture" > Modifier </button>
									<button type="button" class="btn btn-default fermer" data-dismiss="modal" >Fermer</button>
								</div>	
								<input type="hidden" name="operation" value="modifier">  <!-- info pour préciser l'action que l'admin veut réaliser -->
								<input type="hidden" name="id" value="<?php $id ?> ">  <!-- info pour préciser l'ID de la structure que l'admin veut modifier  -->
	      						
	    					</div> <!-- Fin Modal Footer-->
	  					</div>     <!-- Fin Modal content-->
	  				</div>
	  			</div>

				
				<?php 
					if (!empty($message))
					{
				?>
				<div class="alert alert-success alert-dismissible hide">
					<p  class="close" data-dismiss="alert" aria-label="close">&times;</p>
					<strong> <?php echo $message ?> </strong>
					</div>
				<?php		
					}	
				?>
						
			</form>
		</div>	

		<script type="text/javascript"> 
			$(function(){ 
						$("#idModalUpdateStrcture").modal('show') ; 
						$(".fermer").click(function(){
							window.location.assign ("http://localhost/ReseauHospitalite/W-master/public/admin/repertoire-langue") ;
						}) ;
					}) ;	 
		</script>

	</section>

	<div class="clearfix"></div>

<?php
}  // end if(!empty)
?>
	
