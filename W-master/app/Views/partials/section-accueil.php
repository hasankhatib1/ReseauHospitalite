<section>
    <div class="container box">                   
        <h1 id="title" class="blink text-center titrsPage">Nos Actualités</h1>     
        <div id="blog-post" class="owl-carousel">
            <?php
                $objActualites = new \Model\ActualitesModel;
                $lstActualites = $objActualites->findAll('date', 'DESC', 5);
                foreach ($lstActualites as $actualite)
                {
                   $date =  $actualite['date'] ;
                    $dateFr = strftime('%d-%m-%Y',strtotime($date)) ;
                     $acte=$this->url('default_actualite', ["id" => $actualite['id']]);
                ?>
                <!-- <div> -->
                <div class="block">
                    <img src="<?= $this->assetUrl('img/actualites/').$actualite['photo'] ?>" alt="<?= $actualite['libelle'];?>" class="img-responsive img-blog">
                    <div class="content">
                        <h4><?= $actualite['titre'];?></h4>
                        <small><?= $dateFr;?></small>
                        <p class="description"><?= $actualite['description'];?></p>
                        <a href="<?= $acte ?>" class="btn btn-read">Savoir plus</a>
                    </div>
                </div>
                <!-- </div> -->
            <?php } ?>
        </div>

        <div class="text-center">
            <h2 class="bienvenue1">Associations, centres sociaux, comités locaux, particuliers...</h2>
            <h1 class="bienvenue2">BIENVENUE</h1>
            <h2 class="bienvenue3">Mieux se connaitre pour mieux agir</h2>
        </div>

        <div class="col-lg-12 text-center">
            <div id="carousel-example-generic" class="carousel slide">
                <!-- Indicators -->
                <ol class="carousel-indicators hidden-xs">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="img-responsive img-full img-carousel" src="<?= $this->assetUrl('img/1.jpg')?>" alt="">
                        <div class="carousel-caption">
                            <h3><a href="<?= $this->url('default_sante')?>">La santé</a></h3>
                            <p>Le réseau hospitalité publie un guide opérationnel sur la lutte contre EBOLA</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive img-full img-carousel" src="<?= $this->assetUrl('img/humanite1.jpg')?>" alt="">
                        <div class="carousel-caption">
                            <h3><a href="<?= $this->url('default_heberger')?>">Héberger</a></h3>
                            <p>Le réseau hospitalite travaille en faveur de l’égalité des droits économiques, sociaux et culturels des étrangers. Elle coordonne et met en œuvre des actions d’accompagnement des personnes concourant au vivre ensemble</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive img-full img-carousel" src="<?= $this->assetUrl('img/humanite2.jpg')?>" alt="">
                        <div class="carousel-caption">
                            <h3><a href="<?= $this->url('default_guider')?>">Guider</a></h3>
                            <p>Que vous soyez étranger, travailleur social, partenaire ou militant associatif, nous vous invitons à prendre contact avec la délégation nationale de votre région</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive img-full img-carousel" src="<?= $this->assetUrl('img/humanite3.jpg')?>" alt="">
                        <div class="carousel-caption">
                            <h3><a href="<?= $this->url('default_social')?>">Vie sociale</a></h3>
                            <p>L’aide juridictionnelle est accordée aux personnes n’ayant pas ou peu de ressources. Demander l’aide juridictionnelle permet d’obtenir un avocat gratuit qui fera le recours. Une fois le recours envoyé, vous ne pouvez pas être expulsé avant la réponse du tribunal</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive img-full img-carousel " src="<?= $this->assetUrl('img/asile.jpg')?>" alt="">
                        <div class="carousel-caption">
                            <h3><a href="<?= $this->url('default_sensibiliser')?>">Sensibiliser</a></h3>
                            <p>Ressources de sensibilisation créées ou portées par le réseau hospitalité</p>
                        </div>
                    </div>
                </div>
                <!-- Flêches latérales -->
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="icon-prev"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="icon-next"></span>
                </a> 
            </div>
        </div>
    </div>

    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({interval: 5000}); //changes the speed
    </script>

    <!--script pour le h1-->
    <script>
        $('#title').mouseover(function(){ $(this).addClass('blink'); })
        $('#title').mouseout(function(){  $(this).removeClass('blink'); })
    </script>

    <!--load JS BLOG-->
<!--     <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&amp"></script>
 -->    <script src="<?= $this->assetUrl('js/waypoints.min.js')?>"></script>
    <script src="<?= $this->assetUrl('js/lightbox.js')?>"></script>
    <script src="<?= $this->assetUrl('js/jquery.counterup.min.js')?>"></script>
    <script src="<?= $this->assetUrl('js/owl.carousel.min.js')?>"></script>
    <script src="<?= $this->assetUrl('js/html5lightbox.min.js')?>"></script>
    <script src="<?= $this->assetUrl('js/jquery.mixitup.js')?>"></script>
    <script src="<?= $this->assetUrl('js/wow.min.js')?>"></script>
    <script src="<?= $this->assetUrl('js/jquery.scrollUp.js')?>"></script>
    <script src="<?= $this->assetUrl('js/jquery.sticky.js')?>"></script>
    <script src="<?= $this->assetUrl('js/jquery.nav.js')?>"></script>
    <script src="<?= $this->assetUrl('js/main.js')?>"></script>

</section>