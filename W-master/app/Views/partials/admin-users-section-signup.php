		


	<!-- ///////////// Ajouté par Hasan //////////// -->

		<section>
			<div class="container text-center">
				<h3> Création d'un compte d'utilisateur </h3>
				<form method="POST" action="" class="form-horizontal" >
					
					<label class=" col-sm-2  control-label"> Identifiant </label>
					<div class="col-sm-10 ">
						<input type="text" name="username" placeholder="Identifiant" required class="form-control"> 
					</div>
					<div class="clearfix "></div> <br/>

					<label class=" col-sm-2 control-label"> Email </label>
					<div class="col-sm-10 ">
						<input type="email" name="email" placeholder="Email" required class="form-control">
					</div>
					<div class="clearfix "></div> <br/>

					<label class="col-sm-2 control-label"> Mot de passe </label>
					<div class="col-sm-10 ">
						<input type="password" name="password" placeholder="Mot de passe" required class="form-control">
					</div>
					<div class="clearfix "></div> <br/>

					<label class="col-sm-2  control-label"> Rôle </label>
					<div class="col-sm-10 ">
						<input type="text" name="role" placeholder="Rôle (admin, redacteur ou utilisateur) " required class="form-control">
					</div>
					<div class="clearfix "></div> <br/>
					
					<button type="submit" class="btn btn-success"   id="idBtnAjoutUser"> Ajouter </button>

					<div class="clearfix "></div> 
	
					
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
				$("#idBtnAjoutUser").click(function(){
				$("#idModalMessage").modal('show') ;
				}) 
			</script>
					
		</section>

	