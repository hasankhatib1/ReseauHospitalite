<?php
 
 /////////// Le fichier delete_events.php permet de supprimer un événement de la base de données   //////////////


$id=$_POST['id'];
 
// connexion à la base de données

 $bdd = new PDO ('mysql:host=localhost; dbname=reseauhospitalite; charset=utf8' , 'root', '');
 
 
$sql = "DELETE FROM agenda WHERE id=?";
$q = $bdd->prepare($sql);
$q->execute(array($id));
 
?>