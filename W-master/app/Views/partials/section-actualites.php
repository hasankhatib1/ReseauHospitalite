<section>
  <div class="container box">
    <div class="title">
      <h1 class="text-center titrsPage"><strong>Nos Actualités</strong></h1>
    </div>

    <?php
        $objActualites = new \Model\ActualitesModel;
        $lstActualites = $objActualites->findAll('date', 'DESC' );

        $nbTotal = count($lstActualites);

        $nbParPage =6;

        $nbPage = ceil($nbTotal/$nbParPage);
        for ($i=0; $i<$nbPage; $i++ ){
            $href = $this->url('default_actualites_pagination', [ "page" => $i ]);
            $html = '<a href="'. $href .'">(page '. $i . ') </a>';
        }

        $listpaginee=array_slice($lstActualites, $page*$nbParPage, $nbParPage);
        foreach($listpaginee as $actualite) :
            $acte=$this->url('default_actualite', ["id" => $actualite['id']]);
         ?>
        <!-- <div> -->
        <div class="block actualite panel panel-success flx">
            <img src="<?= $this->assetUrl('img/actualites/').$actualite['photo'] ?>" alt="<?= $actualite['libelle'];?>" class="img-responsive img-blog">
            <div class="content">
                <h4><?= $actualite['titre'];?></h4>
                <small><?= $actualite['date'];?></small>
                <p class="description"><?= $actualite['description'];?></p>
                <a href="<?php echo $acte ?>" class="btn btn-read">Savoir plus</a>
            </div>
        </div>
        <!-- </div> -->
    <?php endforeach; ?>
     <div class='clearfix'> </div>

      <div class="text-center"> 
           <?php 
            // if($page > 0)
            //   {
            //       $pagePrev= $page -1;
            //       $urlPrev= $this->url('default_actualites_pagination', [ "page" => $pagePrev ]);
            //       echo '<a href="'.$urlPrev.'" class="btn btn-success"> Précedent </a>';
            //   } 

            //  if ($nbTotal >  $nbParPage)
            //   {
            //       $pageNext= $page + 1;
              
            //       $urlNext= $this->url('default_actualites_pagination', [ "page" => $pageNext ]);

            //       echo '<a href="'.$urlNext.'" class="btn btn-success"> Suivant </a>';

            // }

            //   if(($nbParPage % $nbTotal)>1)
            //   {
            //       $nbPage = $nbPage + 1 ;
            //       $urlNext= $this->url('default_actualites_pagination', [ "page" => $pageNext ]);
            //       echo '<a href="'.$urlNext.'" class="btn btn-success"> Suivant </a>';
            //   }

              

            //   if ($nbTotal > $nbParPage) 
            //   {
            //       $pageNext= $page + 1;
            //       $pagePrev= $page - 1;
            //        $urlNext= $this->url('default_actualites_pagination', [ "page" => $pageNext ]);
            //       echo '<a href="'.$urlNext.'" class="btn btn-success"> Suivant </a>';
            //   }
            //   else
            //   {
            //       $pageNext= $page ;
            //       $pagePrev= $page ;
            //   }

            //   if ($pagePrev <= 0)
            //   {
            //       $pagePrev = 0 ;  // rester à la 1ère page
            //   }

            //   if ($pageNext >= $nbPage)
            //   {
            //       $pageNext = $nbPage-1 ; // rester à la drnière page
            //   }

            // $urlPrev= $this->url('default_actualites_pagination', [ "page" => $pagePrev ]);
           
                      

          ?>  

          <?php 
    
      if(($nbParPage % $nbTotal)>1)
      {
        $nbPage = $nbPage + 1 ;
      }

          

          if ($nbTotal > $nbParPage) 
          {
            $pageNext= $page + 1;
            $pagePrev= $page - 1;
          }
          else
          {
            $pageNext= $page ;
            $pagePrev= $page ;
          }

          if ($pagePrev <= 0)
      {
        $pagePrev = 0 ;  // rester à la 1ère page
      }

      if ($pageNext >= $nbPage)
      {
        $pageNext = $nbPage-1 ; // rester à la drnière page
      }
      $urlPrev=""; 
      $urlNext="";
if ($page>0) {
   $urlPrev= $this->url('default_actualites_pagination', [ "page" => $pagePrev ]);
    $urlPrev= '<a href="'.$urlPrev.'" class="btn btn-success"> Précedent </a>';
         
}
if ($page<$nbPage -2){
   $urlNext= $this->url('default_actualites_pagination', [ "page" => $pageNext ]);
   $urlNext= '<a href="'.$urlNext.'" class="btn btn-success"> Suivant </a>';
  
}
         
    ?>

    <div class="text-center pager">
      <?php echo ($urlPrev); ?>
      <?php echo ($urlNext); ?>
      </div> <br/>

      </div>
         
  </div>

</section>