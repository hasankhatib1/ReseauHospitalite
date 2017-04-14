<?php
//page d'envoi du token par mail
if(isset($_POST['btnSub']))
{
	//securisation de la valeur
	$email = strip_tags($_POST['email']);
	//connexion
	$bdd = new PDO('mysql:host=localhost;dbname=footandfood;charset=utf8', 'root', '');

	//recherche de l'adresse email
	$rqVerif = "SELECT idadmin
				FROM admin
				WHERE email = :email";
	$stmtVerif=$bdd->prepare($rqVerif);
	$params = array(':email' => $email);
	$stmtVerif->execute($params);
	$idadmin = $stmtVerif->fetchColumn(); //une seule info ...
	
	//var_dump($idadmin);
	if($idadmin !== false)
	{
	//generation du token
		$token = md5($email); // generation de chaine cryptee en MD5()
		//echo $token;

	//envoi du mail
	include "includes/phpmailer/PHPMailerAutoload.php";
	$mail = new PHPMailer(); //creation d'un objet type de mail
	$mail->isSMTP();//connexion directe au serveur SMTP
	$mail->isHTML(true); //utilisation du format HTML pour le message
	$mail->Host = "smtp.gmail.com"; //le serveur SMTP pour envoyer
	$mail->Port = 465; //le port obligatoire de Google
	$mail->SMTPAuth = true; //on va fournir un login/password au serveur
	$mail->SMTPSecure = 'ssl'; // certificat SSL
	$mail->Username = 'mail.mail@gmail.com';
	$mail->Password = 'xxxxxxxxx';
	$mail->setFrom('mail.mail@gmail.com');//l'expiditeur
	//mise à jour table clients
	$mail->addaddress($email); //l'adresse mail est celle qui perdu son mdp 
	$mail->Subject = "Réseau Hospitalité - mot de passe perdu"; // objet du mail
	$link = '<a href="http://localhost/reseauHospitalite/newPass.php?token='.$token.'">Reinitialiser mon mot de passe</a>';
	$mail->Body = 	'<html>
					<head>
					<style> h1{color: green} </style>
					</head>
					<body>
					<h1>Mot de passe perdu</h1>
					<p>Vous avez signalé votre mot de passe comme perdu ...</p>'.$link.'
					</body>
					</html>';
	if(!$mail->send()) // si probleme pdt envoi
	{
		echo 'erreur envoi '.$mail->ErrorInfo;
	}
	else
	{
		//echo 'Eureka!'; // on l'a trouvé
		//mise à jour table clients
        $rqToken="UPDATE admin 
                  SET token =?
                  WHERE idadmin=?" ;
        $stmtToken=$bdd->prepare($rqToken) ;
        $paramToken= array($token,$idadmin) ;
        $stmtToken->execute($paramToken);
        echo 'Vérifiez votre boite mail..!';

	}





	}
}

?>