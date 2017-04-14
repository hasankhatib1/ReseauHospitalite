<?php
/*articles.php
Affichage des articles en fonction de la catégorie, avec pagination et tri sur le nom ou le prix*/
$titrePage="BioForce3 -page articles";
include "includes/header.php";
include "includes/nav.php";


//connexion BDD

$bdd=new PDO('mysql:host=localhost;dbname=footandfood;charset=utf8', 'root','');

$req ="SELECT idArticle, designation, description, prix, photo
       FROM articles";
      
$stmt=$bdd->prepare($req);

//parametres à passer à la requete
$stmt->bindParam(':categorie',$categorie, PDO::PARAM_INT);
$stmt->bindParam(':limite',$limite, PDO::PARAM_INT);

//exécution
$stmt->execute();
//récupération des données (tableau associatif)
$listeArticle=$stmt->fetchAll(PDO::FETCH_ASSOC);



/*echo'<pre>';
print_r($listeArticle);
echo'</pre>';*/
?>       

<div id="blog">

    <div class="container">
        <div class="row">
            <div class="col-md-12">


                <div class="title">
                    <h1>Nos Actualités</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Lorem ipsum dolor sit
                     amet, consectetur adipisicing elit. Inventore, rerum.</p>
                </div>
              <?php
                    foreach ($listeArticle as $article): //début du foreach pour lire les données 
                    ?>
                <div id="blog-post" class="owl-carousel">
                    <div>
                        <div class="block">
                        <img src="img/<?= $article['photo']; ?>"
                            alt="<?=$article ['designation']; ?>"
                            class="img-responsive img-blog"/>
                            <div  class="blog-date">
                            <?= $article['prix'];?>
                            </div>
                                <div class="content">
                                <div class="panel-body description">
                                  <?= $article['description'];?>
                                </div>

                                    
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>   
    <?php endforeach;      
echo '</div> ';   


   include "includes/footer.php";
   include "includes/script.php";
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
