<?php
/*formulaire pour saisir le nouveau mot de passe*/
$titrePage="Changement de votre mot de passe";


//Récupération du token dans l'url (+nettoyage)
$token=strip_tags($_GET['token']);
//connexion bdd
$bdd=new PDO('mysql:host=localhost;dbname=reseauhospitalite;charset=utf8', 'root','');
//recherche  de l'idclient correspond au token
$rqAdmin="SELECT idadmin
           FROM admin 
           WHERE token =?";
$stmtAdmin=$bdd->prepare($rqAdmin) ;
$params= array($token) ;
$stmtAdmin->execute($params);
$idadmin=$stmtAdmin->fetchColumn();
 
 //si le admin n'est pa absent dans la table
if ($idadmin !== false) 
{
	//affichage du formulaire
?>
   <form method="POST" action="updateMdp.php">
    <input type="hidden" name="idadmin" value="<?= $idadmin;?>"/> <!-- on veut récuperer idAdmin de notre base/ < ? = c'est équivalent a < ? php echo -->
   <div class="form-group">
   	    <label for="password"> Nouveau mot de passe</label>
   		<input type="password" name="password" class="form-control"/>
   	</div>
   	<div class="form-group text-center">
   		<input type="submit" name="btnSub" value="Modifier" class="btn btn-success"/>
   	</div>
   </form>

<?php 
}
else echo 'token non trouvable';

?>