<?php



$titrePage="Evènements - Réseau Hospitalité";
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

$bdd=new PDO('mysql:host=localhost;dbname=reseauHospitalite;charset=utf8', 'root','');
//calcul de la limite basse
$limite=($page -1)*3;

$req ="SELECT idEven, nomEven, libEven, dateEven, descriptionEven, photo
       FROM evenement
       WHERE idEven=:categorie ";

//concaténation du tri
if ($tri == 'dateEven') 
{
	$req.="ORDER BY dateEven ASC";
}      
else
{
	$req.="ORDER BY nomEven ASC";
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
$listeEven=$stmt->fetchAll(PDO::FETCH_ASSOC);


//fabrication des url pour le tri
$urlNom="even.php?page=$page&tri=nom&cat=$categorie";
$urlPrix="even.php?page=$page&tri=prix&cat=$categorie";
/*echo'<pre>';
print_r($listeArticle);
echo'</pre>';*/
?>
<div id="even">
     <div class="container">
         <div class="box">
             <div class="col-md-12">
               <div class="title-even">
                <h1>Nos Actualités</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, rerum.</p>
            </div>
			

</div>
<?php
foreach ($listeEven as $even): //début du foreach pour lire les données 
?>
     <div id="blog-post" class="owl-carousel">
     <div>
     <div class="block">
	<div class="panel panel-success flx">
		<div class="panel-heading text-center">
			<h2>
			<?= ucfirst($even['nomEven']);?>
				<strong><?= $even['dateEven']; ?></strong>
			</h2>
		</div>
		<div class="panel-body imgArticle">	
			<img src="img/<?= $even['photo']; ?>"
			     alt="<?=$even ['descriptionEven']; ?>"
			     class="img-responsive img-circle imgArticle"/>
        </div>

        <div class="panel-body description">
        	<?= $even['descriptionEven'];?>
        </div>
			
		</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	
<?php endforeach; 
echo '</div>'; //fin div de la row

//calcul du nombre des pages maxi
$rqMax="SELECT COUNT(*)
        FROM evenement
        WHERE idEven=:idEven";
$stmtMax=$bdd->prepare($rqMax);
$stmtMax->execute(array(':idEven' => $categorie)); 
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
    $urlPrev="even.php?page=$pagePrev&tri=$tri&cat=$categorie";	
   echo '<a href="'.$urlPrev.'" class="btn btn-success"> Précédent </a>';
} 

if($page < $nbPages)
{
	$pageNext= $page + 1;
    $urlNext="even.php?page=$pageNext&tri=$tri&cat=$categorie";
    echo '<a href="'.$urlNext.'" class="btn btn-success"> Suivant </a>';
}
 echo '</div>'; //fin de centrage dse boutons



   include "includes/script.php";
   include "includes/footer.php";
   ?>
<!--load JS BLOG-->
        
        <script src="js/js/waypoints.min.js"></script>
        <script src="js/js/lightbox.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/js/owl.carousel.min.js"></script>
        <script src="js/js/html5lightbox.js"></script>
        <script src="js/jsjquery.mixitup.js"></script>
        <script src="js/js/wow.min.js"></script>
        <script src="js/jquery.scrollUp.js"></script>
        <script src="js/js/jquery.sticky.js"></script>
        <script src="js/js/jquery.nav.js"></script>
        <script src="js/js/main.js"></script>

</body>

</html>
?>