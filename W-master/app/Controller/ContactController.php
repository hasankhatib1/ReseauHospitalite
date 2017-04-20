<?php

namespace Controller;

use \W\Controller\Controller;
use \PHPMailer;

class ContactController extends Controller
{
	//jai rajouté une methode pour la page contact.php 12-04
	public function contact() 
	{
		// traitement du formulaire
		if(isset($_POST['btn-send'])) 
		{
			$nom= $_POST['name'];
			$prenom= $_POST['surname'];
			$email= $_POST['email'];
			$telephone= $_POST['phone'];
			$message= $_POST['message'];
		
			$mail = new PHPMailer(); // création objet de type mail 
			$mail->isSMTP(); // connexion directe au serveur SMTP
			$mail->isHTML(true); // utilisation du format HTML
			$mail->Host='smtp.gmail.com'; // serveur SMTP pour envoyer
			$mail->Port = 465; // le port obligatoire de google
			$mail->SMTPAuth = true; // on va fournir un login/password au serveur
			$mail->SMTPSecure = 'ssl'; // cerfiticat SSL
			$mail->Username='webforce13@gmail.com';
			$mail->Password='azerty123456';
			$mail->setFrom= ('webforce13@gmail.com'); // l'expéditeur
			$mail->AddAddress('webforce13@gmail.com'); // l'adresse mail du destinataire
			$mail->Subject = "Message de la part de " .$nom. ""; // objet du mail 
			$mail->Body = '<html>
							<head>
							<style> h1{color: pink;} </style>
							</head>
							<body>
							<h1>Message! </h1>
							<p>nom <strong>' .$nom. '</strong></p>
							<br/>
							<p>prenom <strong> '.$prenom.' </strong></p>
							<br/>
							<p>email<strong> '.$email.'</strong></p>
							<br/>
							<p>telephone <strong>' .$telephone.' </strong></p>
							<br/>
							<p>message <strong> '.$message.'</strong></p>
							<br/>
							
							</body>
							</html>';
			if(!$mail->send())
			{
				 echo '<script language="javascript">';
				 echo 'alert '.$mail->ErrorInfo;
				 echo '</script>';
			
			}
			else 
			{
				// echo 'Eureka';
				// mise à jour table clients
				echo '<script language="javascript">';
				echo 'alert("Votre message est envoyé!")';
				echo '</script>';
			
			}
		}
		
		$this->show('pages/contact');
	}
}