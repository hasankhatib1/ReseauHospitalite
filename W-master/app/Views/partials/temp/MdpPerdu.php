<?php
//formulaire pour signaler son mot de passe perdu
$titrePage="Mot de passe perdu";


?>
<form action="sendToken.php" method="post">
	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" name="email" id="email" class="form-control" required />
	</div>

	<div class="form-group" text-center>
		<input type="submit" name="btnSub" value="Envoyer"  class="btn btn-success"/>
	</div>
</form>
