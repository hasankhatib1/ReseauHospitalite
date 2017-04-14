		


	<!-- ///////////// Ajouté par Hasan //////////// -->

		<section>
			<div class="container">
				<form method="POST" action="" class="form-horizontal" >
					
					<div class="modal fade" id="idModalAjoutStrcture" role="dialog" >   <!-- Modal -->
	    				<div class="modal-dialog modal-lg" >
	      					<div class="modal-content">   <!-- Modal content-->

	        					<div class="modal-header"> <!-- Modal Header-->
	          						<button type="button" class="close" data-dismiss="modal">&times;</button>
	          						<h4 class="modal-title"> Ajouter une structure de langue </h4>
	        					</div> <!-- Fin Modal Header-->

	        					<div class="modal-body"> <!-- Modal Body-->
									<label class=" control-label"> Structure </label>
									<div class="col-sm-12 ">
										<input type="text" name="structure" placeholder="Nom de la structure" required class="form-control"> <br/>
									</div>
									<div class="clearfix "></div>

									<label class=" control-label"> Adresse </label>
									<div class="col-sm-12 ">
										<input type="text" name="adresse" placeholder="Adresse" required class="form-control"> <br/>
									</div>
									<div class="clearfix "></div>

									<label class=" control-label"> Arrondissement </label>
									<div class=" col-sm-12 " >
										<select name="arrondissement" class="form-control" required >  <!--  créer une liste déroulante  -->
											<option selected disabled placeholder='Arrondissement'></option>
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
									<div class="clearfix "></div><br/>

									<label class="control-label"> Téléphone </label>
									<div class="col-sm-12 ">
										<input type="tel" name="tel" placeholder="Téléphone" required class="form-control"> <br/>
									</div>
									<div class="clearfix "></div>

									<label class="control-label"> Mail </label>
									<div class="col-sm-12 ">
										<input type="mail" name="mail" placeholder="Mail" required class="form-control"> <br/>
									</div>
									<div class="clearfix "></div>

									<label class=" control-label"> Contact </label>
									<div class="col-sm-12 ">
										<input type="text" name="contact" placeholder="Personne(s) de contact et coordonnées"  class="form-control"> <br/>
									</div>
									<div class="clearfix "></div>

									<label class=" control-label"> Type de formation </label>
									<div class="col-sm-12 ">
										<input type="text" name="formation" placeholder="Type de formation FLE/FLI/Alpha/Illettrisme" required class="form-control"> <br/>
									</div>
									<div class="clearfix "></div>

									<label class=" control-label"> Cotisation et publics </label>
									<div class="col-sm-12 ">
										<input type="text" name="cotisation" placeholder="Frais, cotisation, type publique ..." required class="form-control"> <br/>
									</div>
									<div class="clearfix "></div>

									<label class=" control-label"> Places disponibles </label>
									<div class="col-sm-12 ">
										<input type="text" name="placesDispo" placeholder="Nombre de Places disponibles" required class="form-control"> <br/>
									</div>
									<div class="clearfix "></div>

									<label class=" control-label"> Horaires ateliers </label>
									<div class="col-sm-12 ">
										<input type="text" name="hAteliers" placeholder="Horaires ateliers" required class="form-control"> <br/>
									</div>
									<div class="clearfix "></div>

									<label class=" control-label"> Horaires permanence </label>
									<div class="col-sm-12 ">
										<input type="text" name="hPermanence" placeholder="Horaires permanence" required class="form-control"> <br/>
									</div>
									<div class="clearfix "></div>

									<label class=" control-label"> Informations complémentaires </label> 
									<div class="col-sm-12 ">
										<textarea name="infoComp"  placeholder="Informations complémentaires" cols="60" rows="3" class="form-control"></textarea> <br/> 
									</div>
									<div class="clearfix "></div>
									
								</div> <!-- Fin Modal Body-->

	        					<div class="modal-footer"> <!-- Modal Footer-->
									<button type="submit" class="btn btn-success"   id="idBtnAjoutStrcture"> Ajouter </button>
									<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
									<input type="hidden" name="operation" value="ajouter">  <!-- info pour préciser l'action que l'admin veut réaliser -->
	          						
	        					</div> <!-- Fin Modal Footer-->
	      					</div> <!-- Fin Modal content-->
	      				</div>
	      			</div>

						
					
						<?php 
						if (isset($message))
						{
						?>
						<div class="message"> <br/>
							<div class="modal fade" id="idModalMessage" role="dialog" > 
								<div class="modal-dialog" >
								    <div class="modal-content">   
								    	<div class="modal-body"> 
								    		<p class="text-center"> <?php echo $message ?> </p>
								    	</div>
								    	<div class="modal-footer"> 
								    		<button type="button" class="btn btn-default" data-dismiss="modal"> Fermer </button>
								    	</div>
								    </div>
								</div>
							</div>
						</div>
						<?php		
							}	
						?>
				</form>
			</div>

			<script type="text/javascript"> 
				$("#idBtnAjoutStrcture").click(function(){
				$("#idModalMessage").modal('show') ;
				}) 
			</script>
			
		</section>

	