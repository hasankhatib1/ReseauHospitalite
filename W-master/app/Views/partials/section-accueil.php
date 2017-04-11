<section>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="<?= $this->assetUrl('img/1.jpg')?>" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?= $this->assetUrl('img/1.jpg')?>" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?= $this->assetUrl('img/1.jpg')?>" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?= $this->assetUrl('img/1.jpg')?>" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?= $this->assetUrl('img/1.jpg')?>" alt="">
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Bienvenue</small>
                    </h2>
                    <h1 class="brand-name">Notre groupe d'associations</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>WebForce3</strong>
                        </small>
                    </h2>
                </div>
            </div>

            <div id="blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <h1>Nos Actualités</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, rerum.</p>
                            </div>
                            <div id="blog-post" class="owl-carousel">
                                <?php
                                    $objEvenements = new \Model\EvenementsModel;
                                    $lstEvenements = $objEvenements->findAll('dateEven', 'DESC', 5);
                                    foreach ($lstEvenements as $evenement) : ?>
                                    <!-- <div> -->
                                    <div class="block">
                                        <img src="<?= $this->assetUrl('img/').$evenement['photo'] ?>" alt="<?= $evenement['libEven'];?>" class="img-responsive img-blog">
                                        <div class="content">
                                            <h4><?= $evenement['nomEven'];?></h4>
                                            <small><?= $evenement['dateEven'];?></small>
                                            <p><?= $evenement['descriptionEven'];?></p>
                                            <a href="actualites.php" class="btn btn-read">Savoir plus</a>
                                        </div>
                                    </div>
                                    <!-- </div> -->
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Exemple article avec <strong>sujet</strong></h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="<?= $this->assetUrl('img/photo1.jpg')?>" alt="">
                    <hr class="visible-xs">
                    <p>The boxes used in this template are nested inbetween a normal Bootstrap row and the start of your column layout. The boxes will be full-width boxes, so if you want to make them smaller then you will need to customize.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                     <!-- il faut faire la meme chose que articles.php -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Exemple <strong>autre sujet</strong></h2>
                    <hr>
                    <p>Use as many boxes as you like, and put anything you want in them! They are great for just about anything, the sky's the limit!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div >
            </div>
        </div>


    </div>

    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({interval: 2000}); //changes the speed
    </script>

    <!--load JS BLOG-->
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&amp"></script>
    <script src="<?= $this->assetUrl('js/waypoints.min.js')?>"></script>
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
