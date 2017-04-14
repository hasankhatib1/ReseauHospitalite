

<?php

/////// Le fichier add_events.php permet d’enregistrer l’évenement dans la base de données MySQL //////
 
$title=$_POST['title'];
$description=$_POST['description'];
$start=$_POST['start'];
$end=$_POST['end'];
 
// connexion à la base de données

 $bdd = new PDO('mysql:host=localhost; dbname=reseauhospitalite; charset=utf8', 'root', '');
 
$sql = "INSERT INTO agenda (title, description, start, end) VALUES (:title, :description, :start, :end)";
$q = $bdd->prepare($sql);
$q->execute(array(':title'=>$title, ':description'=>$description, ':start'=>$start, ':end'=>$end));
?>