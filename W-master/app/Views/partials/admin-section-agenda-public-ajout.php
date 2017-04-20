		


	<!-- ///////////// Ajouté par Hasan //////////// -->

		<section>
			<div class="container">
				<form method="POST" action="" enctype="multipart/form-data" class="form-horizontal" >
					
					<div class="modal fade" id="idModalAjoutEvent" role="dialog" >   <!-- Modal -->
	    				<div class="modal-dialog modal-lg" >
	      					<div class="modal-content">   <!-- Modal content-->

	        					<div class="modal-header"> <!-- Modal Header-->
	          						<button type="button" class="close" data-dismiss="modal">&times;</button>
	          						<h6 class="modal-title text-center titrsPage"> Ajouter un événement </h6>
	        					</div> <!-- Fin Modal Header-->

	        					<div class="modal-body"> <!-- Modal Body-->
		        					<div class="form-group">
										<label class=" col-sm-3  control-label"> Titre </label>
										<div class="col-sm-8  ">
											<input type="text" name="titre" placeholder="Titre de l'événement" required class="form-control"> <br/>
										</div>
									</div>	
									<div class="clearfix "></div>

									<div class="form-group">	
										<label class=" col-sm-3  control-label"> URL </label>
										<div class="col-sm-8  ">
											<input type="text" name="titreUrl" placeholder="URL de l'événement (= le titre (ou une partie) sans espace, caractères spéciaux et accents)" required class="form-control"> <br/>
										</div>
									</div>	
									<div class="clearfix "></div>

									<div class="form-group">	
										<label class=" col-sm-3  control-label"> Date de l'événement </label>
										<div class="col-sm-8  ">
											<input type="date" name="dateEvent" placeholder="Date de l'événement" required class="form-control"> <br/>
										</div>
									</div>	
									<div class="clearfix "></div>

									<div class="form-group">	
										<label class=" col-sm-3  control-label"> Chapo </label>
										<div class="col-sm-8  ">
											<textarea type="text" name="resume" placeholder="Chapo" required class="form-control" cols="60" rows="3" class="form-control"></textarea>  <br/>
										</div>
									</div>	
									<div class="clearfix "></div>

									<div class="form-group">
										<label class=" col-sm-3  control-label"> Contenu </label>
										<div class="col-sm-8  ">
											<textarea type="text" name="descrip" placeholder="Contenu" required class="form-control" cols="60" rows="6" class="form-control"></textarea> <br/>
										</div>
									</div>	
									<div class="clearfix "></div>

									<div class="form-group">	
										<label class=" col-sm-3  control-label"> Image </label>
										<div class="col-sm-8  ">
											<input type="file" name="photo" placeholder="Nom de l'image avec l'extention (à mettre le logo, si pas d'image)"  required > <br/>
										</div>
									</div>	
									<div class="clearfix "></div>

									<div class="form-group">	
										<label class=" col-sm-3  control-label"> Document </label>
										<div class="col-sm-8  ">
											<input type="file" name="docTelecharge" placeholder="Ajouter un document à télécharger par l'utilisateur s'il y en a" > <br/>
										</div>
									</div>	
									<div class="clearfix "></div>
	
								</div> <!-- Fin Modal Body-->

	        					<div class="modal-footer"> <!-- Modal Footer-->
	        					<div class="form-group text-center">
									<button type="submit" class="btn btn-success"   id="idBtnAjoutEvent"> Ajouter </button>
									<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
								</div>	
									<input type="hidden" name="operation" value="ajouter">  <!-- info pour préciser l'action que l'admin veut réaliser -->
	          						
	        					</div> <!-- Fin Modal Footer-->
	      					</div> <!-- Fin Modal content-->
	      				</div>
	      			</div>
						
				</form>
			</div>

			<script type="text/javascript"> 
				// $("#idModalAjoutStrcture").modal('hide') ;
				$("#idBtnAjoutEvent").click(function(){
				$("#idModalMessage").modal('show') ;
				}) 
			</script>

			<script>
	            CKEDITOR.replace( 'resume' );
	            CKEDITOR.replace( 'descrip');
        	</script>
			
		</section>

	