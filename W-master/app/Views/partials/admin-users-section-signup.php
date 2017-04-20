		


	<!-- ///////////// Ajouté par Hasan //////////// -->

<section>
	<div class=" container text-center">
		<h3 class="titrsPage"> Création d'un compte d'utilisateur </h3>

		<?php 
		if (isset($message))
		{
		?>
			<div class="alert alert-success alert-dismissible collapse" id="idMessage">
				<p  class="close" data-dismiss="alert" aria-label="close">&times;</p>
				<strong> <?php echo $message ?> </strong>
			</div>

		<?php		
		}	
		?>

		<form method="POST" action="" class="form-horizontal" id="idFormAjoutUser" >
			
			<div class="form-group">	
				<label class=" col-sm-2  control-label"> Identifiant </label>
				<div class="col-sm-9 ">
					<input type="text" name="username" placeholder="Identifiant" required class="form-control"> 
				</div>
			</div>	
			<div class="clearfix "></div> <br/>

			<div class="form-group">	
				<label class=" col-sm-2 control-label"> Email </label>
				<div class="col-sm-9 ">
					<input type="email" name="email" placeholder="Email" required class="form-control">
				</div>
			</div>	
			<div class="clearfix "></div> <br/>

			<div class="form-group">	
				<label class="col-sm-2 control-label"> Mot de passe </label>
				<div class="col-sm-9 ">
					<input type="password" name="password" placeholder="Mot de passe" required class="form-control">
				</div>
			</div>	
			<div class="clearfix "></div> <br/>

			<div class="form-group">	
				<label class="col-sm-2  control-label"> Rôle </label>
				<div class="col-sm-9 ">
					<input type="text" name="role" placeholder="Rôle : admin, redacteur ou utilisateur " required class="form-control">
				</div>
			</div>	
			<div class="clearfix "></div> <br/>
				
			<div class="form-group text-center">	
				<button type="submit" class="btn btn-success"   id="idBtnAjoutUser"> Ajouter </button>
			</div>	
			<div class="clearfix "></div> <br/>

		</form>


	<script type="text/javascript"> 
		$("#idBtnAjoutUser").click(function(){
		$(".collapse").collapse('show');
		}) 
	</script>
			


	