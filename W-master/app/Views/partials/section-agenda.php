
<section>

	<!-- ///////////// Ajouté par Hasan ////////////  -->
	<div class="container"> 

	<h1 id="title" class="text-center titrsPage"> Evénements </h1> 
		<?php 
	        if (isset($w_user['role'])) 
	        { 
	        	echo "<br/> <div  class='text-center'> <a class='btn btn-success'  href='".$this->url('admin_agenda_public_ajout')."'>   Ajouter, modifier ou supprimer un événement </a>  </div> <br/> " ;
	        }
		?>
	
		<div class=" flex">
			<?php 
				use \W\Controller\Controller ;      
				use \Model\AgendapublicModel;   
				$ObjetAgend = new AgendapublicModel;  
				$tabResult = $ObjetAgend -> findAll("dateEvent", "DESC") ; 

				$nbEvents = count($tabResult);

	           	$nbParPage = 4 ;

	            $nbPage = ceil($nbEvents/$nbParPage);
	            for ($i=0; $i<$nbPage; $i++ )
	            {
	                $PageHref = $this->url('agenda_public_pagination', [ "page" => $i ]);   
	            }

	            $listPages = array_slice($tabResult, $page*$nbParPage, $nbParPage);


				if (!empty($listPages))   
				{            
					foreach ($listPages as $tabLigne) 
					{
						$id  		 = $tabLigne["id"] ;
						$titre       = $tabLigne["titre"] ;
						$titreUrl    = $tabLigne["titreUrl"] ;
						$date        = $tabLigne["dateEvent"] ;
						$resume      = $tabLigne["resume"] ;
						$photo       = $tabLigne["photo"] ;
						$description = $tabLigne['description'];

						$hrefTitre  = $this->url('agenda_public_Event', ['titreUrl'=> $titreUrl] )  ;
						$dateFr = strftime('%d-%m-%Y',strtotime($date)) ;
			?>
					<div class="col-sm-6">
						<div class="panel  flx">
							<div class="panel-body ">
								<a href=" <?php echo $hrefTitre ?> ">
									<div class="titre">
										<h4 class="titreEvent"> <strong> <?php echo ($titre) ?> </strong></h4>
										<h4> <?php echo $dateFr  ?> </h4>
									</div>
									<div class="imag">	
										<img src="<?php echo $this->assetUrl('img/img_agenda/').'/'.$photo ?>" alt="<?php echo $titre ?>" class="img-responsive img-thumbnail" />
									</div>	
									<div class="resume">	
										<h4 class="chapoEvent"> <?php echo $resume ?> </h4>
									</div>
									
									<div class="text-right"> <button type="button" class="btn btn-read">Savoir plus</button> </div>
								</a>	
							</div>
						</div>	
					</div>  
				
			<?php
					}  // fin de la boucle foreach
				}  // fin if(!empty)
			?>

		</div><br/>

		<?php 
		
			if(($nbParPage % $nbEvents)>1)
			{
				$nbPage = $nbPage + 1 ;
			}

	        

	        if ($nbEvents > $nbParPage) 
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

	        $urlPrev= $this->url('agenda_public_pagination', [ "page" => $pagePrev ]);
	        $urlNext= $this->url('agenda_public_pagination', [ "page" => $pageNext ]);
		?>

		<div class="text-center pager">
	        <a href="<?php echo $urlPrev ?>" class="btn btn-success"> Précedent </a>
	   		<a href="<?php echo $urlNext ?>" class="btn btn-success"> Suivant </a>
	   	</div> <br/>
                 
                 
	</div>	

</section>