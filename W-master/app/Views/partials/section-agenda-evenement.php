<section>

	<!-- ///////////// Ajouté par Hasan ////////////  -->


	<div class=" container"> 
		<?php 
			use \W\Controller\Controller ;      
			use \Model\AgendapublicModel;   
			$ObjetAgend = new AgendapublicModel;  
			$tabResult = $ObjetAgend->find($id) ;

			if (!empty($tabResult))   // recuperer les informations de l'evenemment
			{
				$titre  = $tabResult["titre"] ;
				$date   = $tabResult["dateEvent"] ;
				$resume = $tabResult["resume"] ;
				$photo  = $tabResult["photo"] ;
				$description = $tabResult['description'];
				$docTelecharge = $tabResult['docTelecharge'];
				$dateFr = strftime('%d-%m-%Y',strtotime($date)) ;		
		?>
				<div>
					<h3 class="titreEvent"> <?php echo  ($titre) ?> </h3>
					<h4 > <?php echo $dateFr  ?> </h4>
					<h4 class="chapoEvent"> <?php echo $resume ?> </h4>
					<img src="<?php echo $this->assetUrl('img/img_agenda/').'/'.$photo ?>" alt="<?php echo $titre ?>" class="img-responsive img-thumbnail" />
					<p class="descripEvent"> <?php echo $description ?> </p>
					
					<?php 
					if (!empty($docTelecharge))
					{
						echo '<a class="btn btn-success" href="'. $this->assetUrl('img/img_agenda/').'/'.$docTelecharge.' "> Télécharger le document </a> ' ;
					}
					?>
				</div>
				
					
				<div class="clearfix"></div><br/>
		<?php
		}  // end if(!empty)
		?>

	</div>
</section>