<section>
	<h1>Connexion</h1>
	<form method="POST" action="">
		<input type="text" name="usernameOrEmail" placeholder="Nom ou email d'utilisateur" required><br>
		<input type="password" name="password" placeholder="Mot de passe" required><br>
		<input type="hidden" name="operation" value="connexion"><br>
		<button type="submit">Envoyer</button>
		<div class="message">
			<?php if (isset($message)) echo $message; ?>
		</div>
	</form>
</section>
