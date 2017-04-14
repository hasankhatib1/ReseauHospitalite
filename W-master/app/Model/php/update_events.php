
<?php
 
 /////////// Le fichier update_events.php permet d'enregistrer les  modifications d'un événement dans la base de données   //////////////
/* VALUES */
$id=$_POST['id'];
$title=$_POST['title'];
$description=$_POST['description'];
$start=$_POST['start'];
$end=$_POST['end'];
 
// connexion à la base de données

 $bdd = new PDO ('mysql:host=localhost; dbname=reseauhospitalite; charset=utf8' , 'root', '');
 
$sql = "UPDATE agenda SET title=?, description=?, start=?, end=? WHERE id=?";
$q = $bdd->prepare($sql);
$q->execute(array($title, $description, $start, $end, $id));
 
?>