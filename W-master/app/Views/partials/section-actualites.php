<section>
    <div class="container">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="title">
                                <h1>Nos Actualités</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, rerum.</p>
                            </div>
                           
                                <?php
                                    $objActualites = new \Model\ActualitesModel;
                                    $lstActualites = $objActualites->findAll('date', 'DESC' );

                                    $nbTotal = count($lstActualites);
                                    $nbParPage = 5;
                                    $nbPage = ceil($nbTotal/$nbParPage);
                                    for ($i=0; $i<$nbPage; $i++ ){
                                        $href = $this->url('default_actualites_pagination', [ "page" => $i ]);

                                        $html = '<a href="'. $href .'">(page '. $i . ') </a>';
                                        echo ($html);
                                                   
                                    }

                                    $listpaginee=array_slice($lstActualites, $page*$nbParPage, $nbParPage);
                                    foreach($listpaginee as $actualite) : ?>
                                    <!-- <div> -->
                                    <div class="block actualite panel panel-success flx">
                                    
                                        <img src="<?= $this->assetUrl('img/').$actualite['photo'] ?>" alt="<?= $actualite['libelle'];?>" class="img-responsive img-blog">
                                        <div class="content">
                                            <h4><?= $actualite['titre'];?></h4>
                                            <small><?= $actualite['date'];?></small>
                                            <p><?= $actualite['description'];?></p>
                                            <a href="#.php" class="btn btn-read">Savoir plus</a>
                                        </div>
                                    </div>
                                    <!-- </div> -->
                                <?php endforeach; ?>

                            </div>
                            <div> 
                                 <?php if($page > 1)
                                    {
                                        $pagePrev= $page -1;
                                        $urlPrev= $this->url('default_actualites_pagination', [ "page" => $pagePrev ]);
                                        echo '<a href="'.$urlPrev.'" class="btn btn-success"> Précedent </a>';
                                    } 

                                    if($page <  $nbParPage)
                                    {
                                        $pageNext= $page + 1;
                                    
                                        $urlNext= $this->url('default_actualites_pagination', [ "page" => $pageNext ]);
                                        echo '<a href="'.$urlNext.'" class="btn btn-success"> Suivant </a>';

                                     }
                                ?>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</section>