<?php
/*$nom = $_POST['nom'] ;
$prenom = $_POST['prenom'] ;
$sexe = $_POST['sexe'] ;
$pays = $_POST['pays'] ;
$tailleMax = $_POST['taille_max'] ;
 
$nomFichier    = $_FILES['fichier']['name'] ;
$tailleFichier = $_FILES['fichier']['size'] ;
$nomTmp        = $_FILES['fichier']['tmp_name'] ;
$typeFichier   = $_FILES['fichier']['type'] ;
$error         = $_FILES['fichier']['error'] ;
 
echo( "Votre nom: <b>".$nom."</b><br>\n" ) ;
echo( "Votre prénom: <b>".$prenom."</b><br>\n" ) ;
echo( "Votre sexe: <b>".$sexe."</b><br>\n" ) ;
echo( "Votre pays d'origine: <b>".$pays."</b><br>\n" ) ;
echo( "Voilà les données de votre image: <br>\n nom => <b>".$nomFichier.
	  "</b><br>\n taille => <b>".$tailleFichier.
	  "</b> octets<br>\n nom sur le serveur => <b>".$nomTmp.
	  "</b><br>\n type de l'image => <b>".$typeFichier.
	  "</b><br>\n code de l'erreur => <b>".$error."</b><br>") ;
echo( "Taille maximale de l'image: <b>".$tailleMax."</b> octets</b>\n" ) ;




$destinataire = $_POST['email'];
// Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
$expediteur = 'chaabani.mjs@gmail.com';
$objet = $_POST['subject'];
$headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
$headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
$headers .= 'Reply-To: '.$expediteur."\n"; // Mail de reponse
$headers .= 'From: "Nom_de_expediteur"<'.$expediteur.'>'."\n"; // Expediteur
$headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire    
$message = '<div style="width: 100%; text-align: center; font-weight: bold"> Bonjour'.$_POST['name'].'! \n'.$_POST['message'].'</div>';
if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
{
    echo 'Votre message a bien été envoyé ';
}
else // Non envoyé
{
    echo "Votre message n'a pas pu être envoyé";
}
*/













	$to      = 'chaabani.mjs@gmail.com';
               $message = $this->input->post('msg');
               $from_email="=?UTF-8?B?".base64_encode( $this->input->post('email'))."?=";
               $from_user = "=?UTF-8?B?".base64_encode( $this->input->post('name'))."?=";
                $subject = "=?UTF-8?B?".base64_encode($this->input->post('subject'))."?=";
   
                $headers = "From: $from_user <$from_email>\r\n".   "MIME-Version: 1.0" . "\r\n" .
                 "Content-type: text/html; charset=UTF-8" . "\r\n";
   
               if(mail($to, $subject, $message, $headers))
                {
                    echo 'Votre message a bien été envoyé ';
                }
                else // Non envoyé
                {
                    echo "Votre message n'a pas pu être envoyé";
               }
               redirect('contact/?m=added');

	
?>