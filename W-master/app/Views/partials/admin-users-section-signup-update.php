<?php


///////////// Ajouté par Hasan //////////// 


use \W\Model\UsersModel;       // c'est le chemain d'une classe de Frame W nommée UsersModel   (pour se connecter à la base de données : table : users)
$ObjetSignupUpdate = new UsersModel;  

$tabResult = $ObjetSignupUpdate->find($id) ;

if (!empty($tabResult))  
{
	$username  = $tabResult["username"] ;   
	$email     = $tabResult["email"]    ;
	$role	   = $tabResult["role"]     ;
	

?>

<section>
	<div class="container">
		<form method="POST" action="" class="form-horizontal text-center" >
			
			<div class="modal fade" id="idModalUpdateSignup" role="dialog" >   
				<div class="modal-dialog" >
					<div class="modal-content">   <!-- Modal content-->

						<div class="modal-header"> <!-- Modal Header-->
							<button type="button" class="close fermer" data-dismiss="modal">&times;</button>
							<h6 class="modal-title text-center titrsPage"> Modifier un compte </h6>
						</div> <!-- Fin Modal Header-->

						<div class="modal-body"> <!-- Modal Body-->

							<div class="form-group">	
								<label class="col-sm-2 control-label"> Identifiant </label>
								<div class="col-sm-10 ">
									<input type="text" name="username" placeholder="Identifiant " required class="form-control"  value="<?php echo $username ?>" > <br/>
								</div>
							</div>	

							<div class="form-group">
								<label class="col-sm-2 control-label"> email </label>
								<div class="col-sm-10 ">
									<input type="email" name="email" placeholder="Email" required class="form-control" value="<?php echo $email ?>" > <br/>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label"> Mot de passe </label>
								<div class="col-sm-10 ">
									<input type="password" name="password" placeholder="Mot de passe" required class="form-control" > <br/>
								</div>
							</div>	

							<div class="form-group">
								<label class="col-sm-2 control-label"> Rôle </label>
								<div class="col-sm-10 ">
									<input type="text" name="role" placeholder="Rôle : admin, redacteur ou utilisateur" required class="form-control" value="<?php echo $role ?>">
								</div>
							</div>	
							<div class="clearfix "></div>

						</div> <!-- Fin Modal Body-->

						<div class="modal-footer"> <!-- Modal Footer-->
							<div class=" form-group text-center">	
								<button type="submit" class="btn btn-success" id="idBtnUpdateSignup" > Modifier </button>
								<button type="button" class="btn btn-default fermer" data-dismiss="modal" >Fermer</button>
							</div>	
							<input type="hidden" name="operation" value="modifier">  
							<input type="hidden" name="id" value="<?php $id ?> ">  
								
						</div> <!-- Fin Modal Footer-->
					</div> <!-- Fin Modal content-->
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
	<div class="clearfix"></div>
	
		<script type="text/javascript"> 
			$(function(){ 
						$("#idModalUpdateSignup").modal('show') ;
						$(".fermer").click(function(){
							window.location.assign ("http://localhost/ReseauHospitalite/W-master/public/admin/users/signup") ;
						});
					}) ;	 
		</script>

<?php
}  // end if(!empty)
?>


		
</section>