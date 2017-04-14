<?php

$titrePage="LoginUtilisateur.php";


?>
<form action="loginUtilisateur.php" method="post">
	
	
  	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" name="email" id="email" class="form-control"/>
	</div>

	<div class="form-group">
		<label for="password">Mot de passe</label>
		<input type="password" name="mdp" id="pass" class="form-control" required/>
	</div>


	<div class="form-group" text-center>
		<input type="submit" name="btnSub" value="Entrer"  class="btn btn-success"/>
	</div>

</form>
<p class="text-center">
	<a href="MdpPerdu.php">Mot du passe perdu...</a>
</p>

