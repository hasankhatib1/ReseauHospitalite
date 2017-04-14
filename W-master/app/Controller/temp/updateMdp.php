<?php
/*script de modification du mot de passe et suppression du token*/
$titrePage="Modification du mot de passe";


//nettoyage
$safe=array_map('strip_tags', $_POST);
//connexion
$bdd=new PDO('mysql:host=localhost;dbname=reseauhospitalite;charset=utf8', 'root','');
//if(verifMdp($safe['password'])){



//requete de mise à jour
$reqMaj="UPDATE admin
			SET password = :password, token = NULL
			WHERE idadmin = :idadmin";
$stmtMaj=$bdd->prepare($reqMaj) ;
$params= array (':idadmin'=>$safe['idadmin'],
	             ':password'=>password_hash($safe['password'], PASSWORD_DEFAULT));
$stmtMaj->execute($params);

echo 'vous avez bien changé votre mot de passe';
//joli message pour dire que c'est ok
//}

?>

