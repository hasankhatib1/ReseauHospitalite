		<?php
		// chercher les infos de l'article à modifier :
		use \Model\ArticlesModel;       // c'est le chemain de la classe ArticlesModel (pour se connecter à la base de données)
		$bjetArticleModel = new ArticlesModel;  // création d'un objet sur la classe Model pour pouvoir se connecter à la base de données (sans faire new PDO(....))
		$tabArticle = $bjetArticleModel->find($id) ;

		if (!empty($tabArticle))   // recuperer les informations de l'article
		{
			$titre     = $tabArticle["titre"] ;   
			$chapo     = $tabArticle["chapo"] ;
			$contenu   = $tabArticle["contenu"] ;
			$photo     = $tabArticle["photo"] ;
			$categorie = $tabArticle["id_categorie"];
			$tag       = $tabArticle["tags"] ;
			$url       = $tabArticle["url"] ;

			// extract($tabArticle) ;  // extarct : permet de créer les varibles ($titre, $chapo, ...) directement à partir du tableau ($tabArticle)
		?>

		<section>
			<h3> Formulaire de modification d'un article (page Back-Office) </h3>

			<form method="POST" action="" class="form-horizontal text-center">
				<div class="col-sm-10 ">
					<input type="text" name="titre" placeholder="TITRE" required value="<?php echo $titre ?>" class="form-control"> <br/>
					<textarea name="chapo"  placeholder="CHAPO" cols="60" rows="3" required class="form-control"> <?php echo $chapo ?> </textarea> <br/>
					<textarea name="contenu"  placeholder="CONTENU" cols="60" rows="5" required class="form-control"> <?php echo $contenu ?> </textarea> <br/>
					<input type="text" name="photo"  placeholder="CHEMIN DE PHOTO" required value="<?php echo $photo ?>" class="form-control"> <br/>
					<input type="text" name="categorie"  placeholder="ID CATEGORIE" required value="<?php echo $categorie ?>" class="form-control"> <br/>
					<input type="text" name="tag"  placeholder="TAG1, TAG2, ... " required value="<?php echo $tag ?>" class="form-control"> <br/>
					<input type="text" name="url"  placeholder="URL" required value="<?php echo $url ?>" class="form-control"> <br/>
		
					<button type="submit" class="btn btn-success"> Modifier </button> 
					
					<input type="hidden" name="operation" value="modifier">  <!-- info pour préciser l'action que l'admin veut réaliser -->
					<input type="hidden" name="id" value="<?php $id ?> ">  <!-- info pour préciser l'ID de l'article que l'admin veut modifier  -->
					
					<div class="message"> <br/>
						<?php 
							if (isset($message))
							{
								echo $message;
							}
						?>
					</div>
				</div>
			</form>

		</section>
		
		<div class="clearfix"></div>
		

		<?php
		}  // end if(!empty)
		?>
			
		</section>