<?php

/*articles.php
Affichage des articles en fonction de la catégorie, avec pagination et tri sur le nom ou le prix*/
$titrePage="BioForce3 -page articles";
include "includes/header.php";
include "includes/nav.php";

//récupération dse paramètres dans l'url
if(isset($_GET['cat']))
{
	$categorie=strip_tags($_GET['cat']);
}

else $categorie=1; //catégorie par défaut
if (isset($_GET['tri'])) $tri=strip_tags($_GET['tri']);
else $tri='nom'; //tri par défaut
if(isset($_GET['page'])) $page=strip_tags($_GET['page']);
else $page =1; //page 1 par défaut


//connexion BDD

$bdd=new PDO('mysql:host=localhost;dbname=bioforce3;charset=utf8', 'root','');
//calcul de la limite basse
$limite=($page -1)*3;

$req ="SELECT idArticle, designation, description, prix, photo
       FROM articles
       WHERE idCategories=:categorie ";

//concaténation du tri
if ($tri == 'prix') 
{
	$req.="ORDER BY prix ASC";
}      
else
{
	$req.="ORDER BY designation ASC";
}

//ajout de la pagination
$req.=" LIMIT :limite,3";//3 articles par page
//pour le controle
//echo $req;

$stmt=$bdd->prepare($req);

//parametres à passer à la requete
$stmt->bindParam(':categorie',$categorie, PDO::PARAM_INT);
$stmt->bindParam(':limite',$limite, PDO::PARAM_INT);

//exécution
$stmt->execute();
//récupération des données (tableau associatif)
$listeArticle=$stmt->fetchAll(PDO::FETCH_ASSOC);


//fabrication des url pour le tri
$urlNom="articles.php?page=$page&tri=nom&cat=$categorie";
$urlPrix="articles.php?page=$page&tri=prix&cat=$categorie";
/*echo'<pre>';
print_r($listeArticle);
echo'</pre>';*/
?>
<div class="text-center">
	<a href="<?= $urlNom; ?>">Trier par nom</a>
	<a href="<?= $urlPrix; ?>">Trier par prix</a>
</div>
<div class="container">
<div class="box">
<div class="row">
<?php
foreach ($listeArticle as $article): //début du foreach pour lire les données 
?>

<div class="col-md-4">

	<div class="panel panel-success flx">
		<div class="panel-heading text-center">
			<h2>
			<?= ucfirst($article['designation']);?>
				<strong><?= $article['prix']; ?>€</strong>
			</h2>
		</div>
		<div class="panel-body imgArticle">	
			<img src="img/<?= $article['photo']; ?>"
			     alt="<?=$article ['designation']; ?>"
			     class="img-responsive img-circle imgArticle"/>
        </div>

        <div class="panel-body description">
        	<?= $article['description'];?>
        </div>
			
		
	</div>
	</div>
<?php endforeach; 
echo '</div> </div> </div>'; //fin div de la row

//calcul du nombre des pages maxi
$rqMax="SELECT COUNT(*)
        FROM articles
        WHERE idCategories=:idCategories";
$stmtMax=$bdd->prepare($rqMax);
$stmtMax->execute(array(':idCategories' => $categorie)); 
$max=$stmtMax->fetchColumn(); //le nombre d'articles dans la catégorie   
//echo '<p>'.$max.'</p>';

//calcul du nombre maximum des pages
$nbPages = intval($max/3); //intval va convertir le reel a integer (je recupere que la partie entiere d'un nombre 1 au lieu de 1.05)
if(($max % 3) > 0) $nbPages++;

//echo '<p>'.$nbPages.'</p>';
echo '<div class="text-center">';//pour centrer les boutons 

//liens pour la pagination (uniquement si utiles)
if($page > 1)
{
	$pagePrev= $page -1;
    $urlPrev="articles.php?page=$pagePrev&tri=$tri&cat=$categorie";	
   echo '<a href="'.$urlPrev.'" class="btn btn-success"> Précédent </a>';
} 

if($page < $nbPages)
{
	$pageNext= $page + 1;
    $urlNext="articles.php?page=$pageNext&tri=$tri&cat=$categorie";
    echo '<a href="'.$urlNext.'" class="btn btn-success"> Suivant </a>';
}
 echo '</div>'; //fin de centrage dse boutons


include "includes/footer.php";
?>