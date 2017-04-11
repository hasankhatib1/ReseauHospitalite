<?php
/*script d'ajout d'un article avce upload de la photo*/
if(isset($_POST['btnSub'])){
	//nettoyage des données du formulaire (attaque XSS)
	$safe=array_map('strip_tags',$_POST);
	//téléchargement de l'image
	if(isset($_FILES['file']))
	{
     $repertoire='img/'; //le répertoire ou copier l'image
     $tmpName=$_FILES['file']['tmp_name']; //le nom temporaire
     $fichier=$_FILES['file']['name']; //le nom d'origine du fichier
     //copie du fichier
     if(move_uploaded_file($tmpName, $repertoire.$fichier))
     {
       //connexion BDD
       $bdd=new PDO('mysql:host=localhost;dbname=reseauHospitalite;charset=utf8', 'root','');


       //ajout dans la table article
       $rqAjout = "INSERT INTO evenement(nomEven, libEven, dateEven, descriptionEven, photo)
                   VALUES(:nomEven, :libEven, :dateEven, :descriptionEven, :photo)";

       $stmtAjout =$bdd->prepare($rqAjout);
       //print_r($stmtAjout);
       $param2 = array(':nomEven' => $safe['nomEven'],
            ':libEven' => $safe['libEven'],
            ':dateEven' => $safe['dateEven'],
            ':descriptionEven' => $safe['descriptionEven'],
            ':photo' => $fichier);

       $stmtAjout->execute($param2); 
       //print_r($bdd->errorInfo());  
       echo 'Evenement ajouté';
     } //fin move_uploaded_file
     else echo 'Evenement copie fichier';
	} //fin isset $_FILES
	else echo 'Erreur upload';
} // fin isset btnSub
else echo 'OUPSSS!'; 

?>